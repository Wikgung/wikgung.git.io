<?php

namespace App\Controllers;


use App\Models\kesehatanmodel;
use App\Models\pelabuhanmodel;
use App\Models\penginapanmodel;
use App\Models\kebudayaanmodel;


class informasi extends BaseController
{
    public function alur()
    {
        $menuActive = "informasi";

        return view('alur', ['menuActive' => $menuActive]);
    }
    public function ipp()
    {
        $menuActive = "informasi";
        $pelabuhan = new pelabuhanmodel();
        $allpelabuhan = $pelabuhan->findAll();
        $penginapan = new penginapanmodel();
        $allpenginapan = $penginapan->findAll();
        return view('ipp', ['menuActive' => $menuActive, 'allpelabuhan' => $allpelabuhan, 'allpenginapan' => $allpenginapan]);
    }
    public function addpel()
    {
        $id = session()->get('id');
        $menuActive = "informasi";
        $pelabuhan = new pelabuhanmodel();
        $allpelabuhan = $pelabuhan->findAll();
        return view('addpel', [
            'allpelabuhan' => $allpelabuhan,
            'pelabuhan' => $pelabuhan->find($id),
            'menuActive' => $menuActive
        ]);
    }
    public function prosesaddpel()
    {
        $pelabuhan = new pelabuhanmodel();
        $pelabuhan->insert([
            'nama' => $this->request->getPost('nama'),
            'tujuan' => $this->request->getPost('tujuan'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),
            'jadwal' => $this->request->getPost('jadwal'),

        ]);

        return redirect()->to('informasi/ipp')->with('success', 'Data Added Successfully');
    }
    public function editpel($id)
    {
        $pelabuhan = new pelabuhanmodel();
        $menuActive = "kontak";
        $pelabuhan = $pelabuhan->where([
            'id' => $id
        ])->first();
        return view('editpelabuhan', ['pelabuhan' => $pelabuhan, 'menuActive' => $menuActive]);
    }
    public function proseseditpelabuhan($id)
    {
        $pelabuhan = new pelabuhanmodel();

        $pelabuhan->update($id, [
            'nama' => $this->request->getPost('nama'),
            'tujuan' => $this->request->getPost('tujuan'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),
            'jadwal' => $this->request->getPost('jadwal'),

        ]);

        return redirect()->to('informasi/ipp')->with('success', 'Data Updated Successfully');
    }
    public function addpenginapan()
    {
        $id = session()->get('id');
        $menuActive = "informasi";
        $penginapan = new penginapanmodel();
        $allpenginapan = $penginapan->findAll();
        return view('addpenginapan', [
            'allpenginapan' => $allpenginapan,
            'penginapan' => $penginapan->find($id),
            'menuActive' => $menuActive
        ]);
    }
    public function prosesaddpenginapan()
    {
        $penginapan = new penginapanmodel();
        $penginapan->insert([
            'nama_penginapan' => $this->request->getPost('nama_penginapan'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),

        ]);

        return redirect()->to('informasi/ipp')->with('success', 'Data Added Successfully');
    }
    public function editpenginapan($id)
    {
        $penginapan = new penginapanmodel();
        $menuActive = "kontak";
        $penginapan = $penginapan->where([
            'id' => $id
        ])->first();
        return view('editpenginapan', ['penginapan' => $penginapan, 'menuActive' => $menuActive]);
    }
    public function proseseditpenginapan($id)
    {
        $penginapan = new penginapanmodel();

        $penginapan->update($id, [
            'nama_penginapan' => $this->request->getPost('nama_penginapan'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),

        ]);

        return redirect()->to('informasi/ipp')->with('success', 'Data Updated Successfully');
    }



















    public function kebudayaan()
    {
        $menuActive = "informasi";
        $kebudayaan = new kebudayaanmodel();
        $allkebudayaan = $kebudayaan->findAll();

        return view('kebudayaan', ['allkebudayaan' => $allkebudayaan, 'menuActive' => $menuActive]);
    }
    public function addkebudayaan()
    {
        $id = session()->get('id');
        $menuActive = "kebudayaan";
        $kebudayaan = new kebudayaanmodel();
        $allkebudayaan = $kebudayaan->findAll();

        return view('addkebudayaan', [
            'allkebudayaan' => $allkebudayaan,
            'kebudayaan' => $kebudayaan->find($id),
            'menuActive' => $menuActive,
        ]);
    }
    public function prosesaddkebudayaan()
    {
        $foto = '';
        // $cekfoto = session() ->get('foto');
        $kebudayaan = new kebudayaanmodel();
        $img = $this->request->getFile('foto');
        if ($img->isValid()) {
            $newname = $img->getRandomName();
            $foto = $newname;
            $img->move('assets/upload', $newname);
        }

        $kebudayaan->insert([
            'judul' => $this->request->getPost('judul'),

            'foto' => $foto,
            'keterangan' => $this->request->getPost('keterangan'),

        ]);
        return redirect()->to('informasi/kebudayaan')->with('success', 'Data Updated Successfully');
    }
    public function editkebudayaan($id)
    {
        $kebudayaan = new kebudayaanmodel();
        $menuActive = "informasi";
        $kebudayaan = $kebudayaan->where([
            'id' => $id
        ])->first();
        return view('editkebudayaan', ['kebudayaan' => $kebudayaan, 'menuActive' => $menuActive]);
    }
    public function proseseditkebudayaan($id)
    {
        $foto = '';
        // $cekfoto = session() ->get('foto');
        $kebudayaan = new kebudayaanmodel();
        # Cek apakah pengguna memaukkan gambar
        $cekfoto =  $kebudayaan->where(['id' => $id])->first();
        $img = $this->request->getFile('foto');
        if ($img->isValid()) {
            # Jika pengguna memasukkan gambar
            $newname = $img->getRandomName();
            $foto = $newname;
            $foto['height'] = 400;
            $foto['width'] = 600;
            $img->move('assets/upload', $newname);
        } else {
            # jika pengguna ngga memasukakn gambar
            $foto = $cekfoto->foto;
        }

        $kebudayaan->update($id, [
            'judul' => $this->request->getPost('judul'),

            'foto' => $foto,
            'keterangan' => $this->request->getPost('keterangan'),

        ]);

        return redirect()->to('informasi/kebudayaan')->with('success', 'Data Updated Successfully');
    }
    public function deletekeb($id)
    {
        $kebudayaan = new kebudayaanmodel();

        $kebudayaan->delete($id);

        return redirect()->to('informasi/kebudayaan')->with('success', 'Data Deleted Successfully');
    }
    public function kesehatan()
    {
        $menuActive = "informasi";


        $kesehatan = new kesehatanmodel();
        $allkesehatan = $kesehatan->findAll();


        return view('kesehatan', ['allkesehatan' => $allkesehatan, 'menuActive' => $menuActive]);
    }


    public function editkes($id)
    {
        $kesehatan = new kesehatanmodel();
        $menuActive = "informasi";

        $kesehatan = $kesehatan->where([
            'id' => $id
        ])->first();
        return view('editkes', ['kesehatan' => $kesehatan, 'menuActive' => $menuActive]);
    }
    public function proseseditkes($id)
    {
        $kesehatan = new kesehatanmodel();

        $kesehatan->update($id, [
            'positif' => $this->request->getPost('positif'),
            'dalam_perawatan' => $this->request->getPost('dalam_perawatan'),
            'sembuh' => $this->request->getPost('sembuh'),
            'meninggal' => $this->request->getPost('meninggal'),
        ]);

        return redirect()->to('informasi/kesehatan')->with('success', 'Data Updated Successfully');
    }
}
