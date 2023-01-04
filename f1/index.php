<?php

$numbers=explode(",",filter_input(INPUT_GET,"numbers")) ;
$operation =filter_input(INPUT_GET,"oper");
if($numbers[0]!=null){
    $result =$numbers[0] ;
    $report="ok";
    if($operation=="sum")
    {
        for($i=1;$i<count($numbers);$i++)
        {
            $result +=$numbers[$i];
        }
        echo "{result: $result; Status: $report}";
    }
    else if($operation=="minus")
    {
        for($i=1;$i<count($numbers);$i++)
        
        {
        $result -=$numbers[$i];
        }
        echo "{result: $result; Status: $report}";
    }
    else if($operation=="multi")
    {
        for($i=1;$i<count($numbers);$i++)
        {
        $result =$numbers[$i]* $result;
        echo "{result: $result; Status: $report}";
        }
    }
    else if($operation=="div")
    {
        for($i=1;$i<count($numbers);$i++)
        {
        $result =$result/ $numbers[$i];
        }
        echo "{result: $result; Status: $report}";
    }
    else if($operation=="modulo")
    {
        for($i=1;$i<count($numbers);$i++)
        {
        $result =$result% $numbers[$i];
        }
        echo "{result: $result; Status: $report}";
    }
    else{
    $report="wrong operation";
    echo "{Status: $report}";
    }

}
else{
    $report="no numbers";
    echo "{Status: $report}";
}


?>
