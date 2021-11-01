<?php

class Minuman
{

    public $database = "warungmakan_online";
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db_connect;

    public $slugs;


    public function __construct()
    {
        $this->db_connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        //cek koneksi db
        if (mysqli_connect_error()) {
            echo "yah,koneksi ke database warungmakan_online, gagal" . mysqli_connect_error();
        }
    }

    public function generateSlug($namaMinuman)
    {
        $generatedSlugs = preg_replace('/[^A-Za-z0-9-]+/', '-', $namaMinuman);
        $this->slugs = $generatedSlugs;
        return $this->slugs;
    }
    public function edit($minumanSlugs)
    {
    }

    public function readDB()
    {
        $sql = "SELECT * FROM minuman";

        $storing = mysqli_query($this->db_connect, $sql);

        while ($obj = $storing->fetch_object()) {
            $rows[] = $obj;
        }
        if (!empty($rows)) {
            return $rows;
        }
    }
}
