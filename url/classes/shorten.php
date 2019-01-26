<?php
class shorten{
    protected $db;

    function __construct(){
        $this->db=new mysqli("localhost","root","","url");    
    }
    function generateCode($num){
        return base_convert($num,10,36);
    }
    function makeCode($url){
        $url= trim($url);
        if (!filter_var( $url ,FILTER_VALIDATE_URL)){
            return '';
        }
        $url=$this->db->escape_string($url);

        //if url already exists 
        $exists= $this->db->query("Select code from url_map where url='{$url}'");
        if ($exists->num_rows){
            return $exists->fetch_object()->code;
        }
        //if url does not exist generate code
        $num= $this->db->query("select max(id) as num from url_map");
        
        $i=1;
        while(true){
            $num=($num->fetch_object()->num)+$i;
            $code=$this->generateCode($num);
            $test=$this->db->query("Select code from url_map where code='$code'");
            if ($test->num_rows){
                $i=$i+1;
                continue;
            }
            break;
        }
        //echo "$code<br>";
        //store the value in database
        $insert=$this->db->query("insert into url_map values ($num,'{$url}','$code',NOW())");
        //echo "1";
        return $code;
    }
    function getURL($code){
        $code= $this->db->escape_string($code);
        $url= $this->db->query("select url from url_map where code='$code'");
        if ($url->num_rows){
            return $url->fetch_object()->url;
        }
        return '';
    }

    function custURL($code,$url){
        //check if code is already available or not
        $test=$this->db->query("Select code from url_map where code='$code'");
        if (!$test->num_rows){
            $insert=$this->db->query("insert into url_map (url,code,created) values ('{$url}','$code',NOW())");
            return $code;
        }
        else{
            return false;
        }
    }
}

?>