<?php


namespace App;


class XMLtable
{
    public $file = '1.xml';
    protected $data;
    protected $arrayXml;

    public function __construct()
    {
        $file = $this->file;
    }

    public function readXML(): array
    {
        $this->arrayXml = (array)simplexml_load_file($this->file);
        return $this->arrayXml['msg'];
    }

    public function save_xml()
    {

        $xml = "<?xml version=\"1.1\" encoding=\"UTF-8\"?>\n";
        $xml .= "<tet>";
        foreach ($this->data as $row) {
            $xml .= "<msg>";
            foreach ($row as $key => $value) {
                $xml .= "<$key>$value</$key>";
            }
            $xml .= "</msg>\n";
        }
        $xml .= "</tet>";
        file_put_contents($this->file, $xml);

        return $this;

    }

    public function add($login, $password)
    {

        $this->data[] = [
            'login' => $login,
            'password' => $password,
        ];
        return $this;
    }

//
public function checkUser($login){

}
    public function del($login)
    {
        $arr = $this->arrayXml;
        foreach ($arr as $key) {
            foreach ($key as $value => $g) {
                if ($g === $login) {
                    unset($key);

                }
            }
            return $this;
        }

    }

    public function edit($login, array $data = [])
    {
        $editData = [];
        foreach ($this->data as $key => $value) {
            $editData[] = " $key= $value";
        }

        return $this;
    }

}