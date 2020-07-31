<?php


namespace App;


class XMLtable
{
    public $file = '1.xml';
    // protected $data;
    protected $arrayXml;

    public function __construct()
    {
        $file = $this->file;
    }

    public function readXML()
    {
        $this->arrayXml = (array)simplexml_load_file($this->file)['msg'];
        return $this;
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

    public function del($login)
    {
        $arr = $this->data;
        foreach ($arr as $key) {
            foreach ($key as $value) {
                if ($value === $login) {
                    unset($arr[$key]);
                }
            }
        }
        return $this;
    }

    public function edit($login, $editData)
    {
        foreach ($this->data as &$key) {
            foreach ($key as &$value) {
                if ($value === $login) {
                    $key['login'] = $editData[0];
                    $key['password'] = $editData[1];
                }
            }
        }
        return $this;
    }
}
