<?php
                                    function OnSelectionChange() {
                                        echo("OK IT WORKS");
                                    }    
                                ?>

<select onchange="OnSelectionChange()">
        <option value='' disabled selected>Assign Driver</option>
        <option value='4353'>Steve Jobs</option>
        <option value='3333'>Ian Wright</option>
        <option value='66666'>Mark James</option>
    </select>



    <?  
                                        $list=mysqli_query("select * from hotels_name");  
                                    while($row_list=mysqli_fetch_assoc($list)){  
                                        ?>  
                                            <option value="<? echo $row_list['hid']; ?>"> 
                                             <?echo $row_list['h_names'];?>  
                                            </option>  
                                        <?  
                                        }  
                                        ?>

                                        
<select veg Name='Veg'>  
                                    <option value="">Veg Items</option>  
                                    
                                    <?  
                                        $list=mysql_query("select * from veg order by vid asc");  
                                    while($row_list=mysql_fetch_assoc($list)){  
                                        ?>  
                                            <option value="<? echo $row_list['vid']; ?>"<? if($row_list['vid']==$select){ echo "selected"; } ?>>  
                                                                <?echo $row_list['veg_name'];?>  
                                            </option>  
                                        <?  
                                        }  
                                        ?>  
                                    </select> 