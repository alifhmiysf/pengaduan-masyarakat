<?php

namespace App\Controllers;
use App\Models\PengaduanModel;
use \Dompdf\Dompdf;
use App\Controllers\BaseController;

class LaporanController extends BaseController
{
    public function __construct()
    {
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->session = session();
    }

    public function index()
    {
        if (!$this->session->has('adminislogin')) {
            // Redirect to the login page
            return redirect()->to('/auth/login');
        }
        $pengaduan = $this->PengaduanModel->findAll();
        $data = [
            'pengaduan' => $pengaduan,
        ];
        return view('admin/laporan',$data);
    }
    
    public function printpdf()
    {
        if (!$this->session->has('adminislogin')) {
            // Redirect to the login page
            return redirect()->to('/auth/login');
        }
        $dompdf = new Dompdf();
        $pengaduan = $this->PengaduanModel->findAll();
        $data = [
            'pengaduan' => $pengaduan,
        ];
        $data['pengaduan'] = $pengaduan;
        $html = view('admin/laporan',$data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream();
    }
    public function laporan()
    {
        if (!$this->session->has('isPetugasLoggedIn')) {
            // Redirect to the login page
            return redirect()->to('/auth/login');
        }
        $pengaduan = $this->PengaduanModel->findAll();
        $data = [
            'pengaduan' => $pengaduan,
        ];
        return view('petugas/laporan',$data);
    }
    
    public function printpdf1()
    {
        if (!$this->session->has('isPetugasLoggedIn')) {
            // Redirect to the login page
            return redirect()->to('/auth/login');
        }
        $dompdf = new Dompdf();
        $pengaduan = $this->PengaduanModel->findAll();
        $data = [
            'pengaduan' => $pengaduan,
        ];
        $data['pengaduan'] = $pengaduan;
        $html = view('petugas/laporan',$data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
