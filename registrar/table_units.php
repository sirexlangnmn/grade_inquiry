<tr> 
   <td></td>
   <td>Number of Units:</td>            
   <td>
       <?php
        /* $result = mysqli_query($con, "SELECT SUM(unit) FROM grade WHERE student_id = '$get_id' AND school_year = '$school_year' AND semester = '$term'") or die(mysqli_error());*/
          $result = mysqli_query($con, "SELECT SUM(subject.unit) 
                                              FROM subject
                                              JOIN grade 
                                                ON subject.subject_id = grade.subject_id 
                                             WHERE student_id = '$student_id'") or die(mysqli_error());
          while ($rows = mysqli_fetch_array($result)) { ?>
        <?php echo $rows['SUM(subject.unit)']; ?>
       <?php } ?>
   </td> 
   <td></td> 

   
   <td>GWA:</td> 
   <td>
      <?php

        $result = mysqli_query($con, 
        "SELECT SUM(gen_ave) FROM grade WHERE student_id = '$student_id'") 
        or die(mysqli_error());

        $test_count = mysqli_query($con, 
        "SELECT * FROM grade WHERE gen_ave <> '' and student_id = '$student_id'")
        or die(mysqli_error());
        
        $count_gen = mysqli_num_rows($test_count);
        
        while ($rows = mysqli_fetch_array($result)) { ?>

        <?php if ($count_gen  <= 0){ ?>
        <?php }
        else{ ?>
           <?php 
                $ave = $rows['SUM(gen_ave)']; 
                $equal = $ave / $count_gen;
                echo round($equal , 2);
            ?>
       <?php } }?>
   </td> 
   <td></td>
</tr>