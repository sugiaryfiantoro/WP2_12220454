<?php
class Matakuliah extends CI_Controller{
  public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
  public function cetak()
    {
      $this->form_validation->set_rules('kode', 'kode Matakuliah', 'trim|required|numeric|min_length[3]',
      array('required' => '%s Wajib diisi.',
            'numeric' => '%s harus berupa angka',
            'min_length' => '%s harus 3 karakter.',));

      $this->form_validation->set_rules('nama', 'nama Matakuliah', 'required|alpha',
      array('required' => '%s Wajib diisi.',
            'alpha' => '%s wajib di isi huruf'));
      $this->form_validation->set_rules('sks', 'sks', 'required',
      array('required' => '%s Wajib diisi.'));
      if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('view-form-matakuliah');
                }
                else
                {
                  $data = [
                    'kode' => $this->input->post('kode'),
                    'nama' => $this->input->post('nama'),
                    'sks' => $this->input->post('sks')
                            ];

            $this->load->view('view-data-matakuliah', $data);
                        $this->load->view('view-data-matakuliah');
                }
        


}
}
