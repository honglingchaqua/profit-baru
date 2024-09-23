<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class VehicleController extends Controller
{
    public function index(): View
    {
        $totalData = Vehicle::count();
        $vehicles = Vehicle::all();
        
        return view('admin.dashboard', compact('vehicles', 'totalData'));
    }

    public function tableData(): View
    {
        // Logika untuk halaman table-data
        $vehicles = Vehicle::all(); // Ambil semua data untuk ditampilkan di tabel
        
        return view('table-datatable', compact('vehicles'));
    }

    public function create(): View
    {
        return view('admin.create-data');
    }

    public function anyData(): JsonResponse
    {
        $vehicles = Vehicle::all();
        return response()->json($vehicles);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nopol' => 'required|string|max:255',
            'no_rangka' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            'tgl_dec' => 'required|date',
            'tanggal_last_service' => 'required|date',
            'km_sekarang' => 'nullable|integer',
            'tanggal_next_service' => 'nullable|date',
            'note' => 'nullable|string|max:255',
            'remember_stnk' => 'nullable|string|max:255',
            'estimasi_aspirasi' => 'nullable|string|max:255',
            'last_check_tanggal' => 'nullable|date',
            'promo_trade_in' => 'nullable|string|max:255',
            'otr' => 'nullable|string|max:255',
            'dp' => 'nullable|string|max:255',
            'tenor1' => 'nullable|string|max:255',
            'tenor2' => 'nullable|string|max:255',
            'asuransi' => 'nullable|string|max:255',
            'aktif_tanggal' => 'nullable|date',
        ]);

        Vehicle::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function edit($id): View
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('detail', compact('vehicle'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'nopol' => 'required|string|max:255',
            'no_rangka' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            'tgl_dec' => 'required|date',
            'masa_pakai' => 'required|string|max:255',
            'tanggal_last_service' => 'required|date',
            'tanggal_next_service' => 'nullable|date',
            'note' => 'nullable|string|max:255',
            'asuransi' => 'nullable|string|max:255',
            'aktif_tanggal' => 'nullable|date',
        ]);

        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Kendaraan berhasil diupdate');
    }

    public function destroy($id): JsonResponse
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return response()->json(['success' => 'Kendaraan berhasil dihapus']);
    }

    public function getFilteredData(Request $request): JsonResponse
    {
        $query = Vehicle::query();

        if ($request->has('customer')) {
            $query->where('customer', $request->customer);
        }
        if ($request->has('tahun')) {
            $query->whereYear('tgl_dec', $request->tahun);
        }
        if ($request->has('bulan')) {
            $query->whereMonth('tgl_dec', $request->bulan);
        }
        if ($request->has('masa_pakai')) {
            // Implement masa_pakai filter logic here
        }
        if ($request->has('warna')) {
            $query->where('warna', $request->warna);
        }

        $filteredData = $query->get();
        $totalFilteredData = $filteredData->count();

        return response()->json([
            'data' => $filteredData,
            'totalFilteredData' => $totalFilteredData
        ]);
    }
}