$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10024;
                $config['max_height']           = 10000;

                $this->load->library('upload');
 				$this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                       echo "gagal tambah";
                }
                else
                {
                        $gambar = $this->upload->Data();
                        $gambar = $gambar['file_name'];
                        $nama_mahasiswa = $this->input->post('nama_mahasiswa',TRUE);
                        $prodi = $this->input->post('prodi',TRUE);
                        $nim = $this->input->post('nim',TRUE);
                        $email = $this->input->post('email',TRUE);
                        $password = $this->input->post('password',TRUE);
                        $tanggal_lahir = $this->input->post('tanggal_lahir',TRUE);
                        $jenis_kelamin = $this->input->post('jenis_kelamin',TRUE);
                        $deskripsi = $this->input->post('deskripsi',TRUE);
                        $setuju = $this->input->post('setuju',TRUE);

                        $data = array(
                        	'nama_mahasiswa' => $nama_mahasiswa,
                        	'prodi' => $prodi,
                        	'nim' => $nim,
                        	'email' => $email,
                        	'password' => $password,
                        	'tanggal_lahir' => $tanggal_lahir,
                        	'jenis_kelamin' => $jenis_kelamin,
                        	'deskripsi' => $deskripsi,
                        	'setuju' => $setuju,

                        );
                        $this->db->insert('kuliah', $data);
                        redirect('home');
