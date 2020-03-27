<?php


$files = scandir("uploads");
?>
<table>
    <tr>
        <td> file name</td>
         <td>Download</td>
      </tr>


 <?php
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <tr>
        <td>  
        <?php echo $files[$a]; ?>
        </td>
         <td>
          <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            click here</a>
         </td>
     </tr> 
    <?php
}
