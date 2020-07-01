<?PHP
function table($row,$column,$width,$height,$bgc,$color,$border)
{
    $styles=array(
        array( 'text'=> 'Текст красного цвета'
        , 'cells'=> array(1,2,4,5)
        , 'align'=>'center'
        , 'valign'=>'center'
        , 'color'=>'FF0000'
        , 'bgcolor'=>'0000FF')
    , array('text'=>'Текст зеленого цвета'
        , 'cells'=>array(8,9)
        , 'align'=>'right'
        , 'valign'=>'bottom'
        , 'color'=>'00FF00'
        , 'bgcolor'=>'FFFFFF')
    );
    $number=0;
    echo ('<table width="'.$width.' "height="'.$height.' "bgcolor="'.$bgc.' "color="'.$color.' "border="'.$border.' "rules="all">');
    for ($i=1; $i<=$row;$i++)
    {
        echo ('<tr>');
        for ($a=1; $a<=$column; $a++)
        {
            $number++;
            $text=' ';
            if (in_array($number, $styles[0]['cells']))
            {
                $text=$styles[0]['text'];
                $align=$styles[0]['align'];
                $valign=$styles[0]['valign'];
                $color=$styles[0]['color'];
                $bgcolor=$styles[0]['bgcolor'];
            }
            elseif (in_array($number, $styles[1]['cells'])){
                $text=$styles[1]['text'];
                $align=$styles[1]['align'];
                $valign=$styles[1]['valign'];
                $color=$styles[1]['color'];
                $bgcolor=$styles[1]['bgcolor'];
            }
            else {$bgcolor=$bgc;                
            }
            if ($i == 1 and $a ==1) {
              $td = '<td colspan="2" rowspan="2" align="'.$align.'" valign="'.$valign.'" bgcolor="'.$bgcolor.'" style="width:200px; color:'.$color.';">'.$text.'</td>';
              echo($td);        
            } else if ($i>2 or $a>2) {
              $td = '<td rowspan="" align="'.$align.'" valign="'.$valign.'" bgcolor="'.$bgcolor.'" style="width:200px; height:200px; color:'.$color.';">'.$text.'</td>';
              echo($td);
            }
        }
    }
}
echo table(3,3,600,600,'FFFFFF','black', '');
    ?>