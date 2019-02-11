<?php

defined('BASEPATH') or exit('No direct script access allowed');

class X extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = $this->db->query('SELECT * FROM test')->result();
        $res = "<?php\n\$data =\n" . var_export($data, true) . ";\n?>";
        highlight_string($res);
        // echo '<pre>' . var_export($data, true) . '</pre>';
    }

    public function seed()
    {
        $faker = Faker\Factory::create('id_ID');
        $this->benchmark->mark('code_start');
        for ($i = 0; $i < 500; $i++) {
            $query = $this->db->insert('test', [
                'id' => '',
                'name' => $faker->name()
            ]);
        }
        $this->benchmark->mark('code_end');

        echo $this->benchmark->elapsed_time('code_start', 'code_end');
    }
}
