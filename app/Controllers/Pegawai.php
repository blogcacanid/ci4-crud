<?php

namespace App\Controllers;
use App\Models\M_Pegawai;

class Pegawai extends BaseController {

    protected $model;

    public function __construct() {
        $this->model = new M_Pegawai();
        $this->helpers = ['form', 'url'];
    }

    public function index() {
        $data = [
            'result'    => $this->model->orderBy('nip', 'asc')->paginate(10),
            'pager'     => $this->model->pager,
            'title'     => 'Pegawai List'
        ];
        return view('pegawai/list', $data);
    }

    public function add()
    {
        $data = ['title' => 'Add Record Pegawai'];
        return view('pegawai/add', $data);
    }    
    
    public function store()
    {
        $nip = $this->request->getPost('nip');
        $nama_pegawai = $this->request->getPost('nama_pegawai');
        $alamat = $this->request->getPost('alamat');
        $pegawai = [
            'nip'           => $nip,
            'nama_pegawai'  => $nama_pegawai,
            'alamat'        => $alamat,
        ];
        $save = $this->model->save($pegawai);
        if ($save) {
            session()->setFlashdata('success', 'Record has been added successfully.');
            return redirect()->to(base_url('pegawai'));
        } else {
            session()->setFlashdata('error', 'Some problems occured, please try again.');
            return redirect()->back();
        }
    }    
    
    public function show($id)
    {
        $pegawai = $this->model->find($id);
        if (empty($pegawai)) {
            session()->setFlashdata('error','Record not found');
            return redirect()->back();
        }
        $data = [
            'title'     => 'View Pegawai',
            'result'    => $pegawai
        ];
        return view('pegawai/view', $data);
    }    
    
    public function edit($id)
    {
        $pegawai = $this->model->find($id);
        if (empty($pegawai)) {
            session()->setFlashdata('error','Record not found');
            return redirect()->back();
        }
        $data = [
            'title'     => 'Edit Pegawai',
            'result'    => $pegawai
        ];
        return view('pegawai/edit', $data);
    }    
    
    public function update($id)
    {
        $nip = $this->request->getPost('nip');
        $nama_pegawai = $this->request->getPost(('nama_pegawai'));
        $alamat = $this->request->getPost('alamat');

        $pegawai = [
            'nip'           => $nip,
            'nama_pegawai'  => $nama_pegawai,
            'alamat'        => $alamat
        ];
        $update = $this->model->update($id, $pegawai);
        if ($update) {
            session()->setFlashdata('success', 'Record has been updated successfully');
            return redirect()->to(base_url('pegawai'));
        } else {
            session()->setFlashdata('error', 'Some problems occured, please try again.');
            return redirect()->back();
        }
    }
        
    public function destroy($id)
    {
        if (empty($id)) {
            return redirect()->to(base_url('pegawai'));
        }
        $delete = $this->model->delete($id);
        if ($delete) {
            session()->setFlashdata('success', 'Record has been removed successfully.');
            return redirect()->to(base_url('pegawai'));
        } else {
            session()->setFlashdata('error', 'Some problems occured, please try again.');
            return redirect()->to(base_url('pegawai'));
        }
    }   
    
}
