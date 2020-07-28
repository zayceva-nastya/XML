<?php


namespace App;


class XMLtable
{
    public $file = '1.xml';

    public function __construct()
    {
        $file = $this->file;
    }

    public function readXML(): array
    {
        $xml = (array)simplexml_load_file($this->file);
        return $xml['msg'];
    }

    public function save_xml($file, $id, $text)
    {


        $xml = "<msg><id>$id</id><text>$text</text></msg>\n";

        return file_put_contents($file, $xml, FILE_APPEND) . "</text>";

    }

//
    public function del($id)
    {
        $arr = $this->readXML($this->file);
        foreach ($arr as $key) {
            foreach ($key as $value => $g) {
                if ($g === $id) {
                    unset($value);

                }
            }
            return $arr;
        }

    }
    // public function read_xml($text)
    // {

    //     $file = file_get_contents($text);

    //     $str = preg_match_all("/<text>(.*?)<\/text>/ius", $file, $match);

    //     $arr = [];

    //     foreach ($match[1] as $key => $value) {

    //         $arr[$key]['text'] = $value;
    //     }
    //     $str = "<table>";
    //     foreach ($arr as $key) {
    //         $str .= "<tr>";
    //         foreach ($key as $value) {
    //             $str .= "<td>$value</td>";
    //         }
    //         $str .= "\t\t<td><a href='del.php?name=$value'>❌</a></td>\n";
    //         $str .= "\t\t<td>\"<a href='edit.php?name=$value'>✏</td>\n";
    //         $str .= "</tr> \n";
    //     }

    //     $str .= "</table>";

    //     return $str;

    // }

    // public function edit(array $data)
    // {
    //     $editData = [];
    //     foreach ($data as $key => $value) {
    //         $editData[] = " `$key` = '$value' ";
    //     }
    //     return $this;
    // }

}