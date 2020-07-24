<?php


namespace App;


class XMLtable
{

    public function save_xml($text)
    {


        $xml = "<msg><text>$text</text></msg>\n";

        return file_put_contents("1.xml", $xml, FILE_APPEND);

    }


    public function read_xml($text)
    {

        $file = file_get_contents($text);

        $str = preg_match_all("/<text>(.*?)<\/text>/ius", $file, $match);

        $arr = [];

        foreach ($match[1] as $key => $value) {

            $arr[$key]['text'] = $value;
        }
        $str = "<table>";
        foreach ($arr as $key) {
            $str .= "<tr>";
            foreach ($key as $value) {
                $str .= "<td>$value</td>";
            }
            $str .= "\t\t<td><a href='del.php?name=$value'>❌</a></td>\n";
            $str .= "\t\t<td>\"<a href='edit.php?name=$value'>✏</td>\n";
            $str .= "</tr> \n";
        }

        $str .= "</table>";

        return $str;

    }

    public function edit(array $data)
    {
        $editData = [];
        foreach ($data as $key => $value) {
            $editData[] = " `$key` = '$value' ";
        }
        return $this;
    }

    public function del($text)
    {
        unset($text);
        return $this;
    }
}