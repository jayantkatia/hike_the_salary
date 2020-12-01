<?php
    include_once("changeCompany.php");
    include_once("getEmployee.php");
?>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Hike the Salary</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
        <meta name="description" content="Practice SQL injection by changing the salary of employees">
        <meta name="author" content="Jayant Katia">
        <meta name="keywords" content="sql injection,employees sql injection">

    </head>
    <body>
        <div class="heading text-center word-spacing">Hike The Salary .</div>
        <p class="text-center font-large">The below listed software developers want to change the company they work in.<br>
            Can you recommend them some awesome companies ?</p>
        
        <div class="text-center">
            <form action="changeCompany.php" method="POST">
                <div class="dropdown">
                    <select name="name" class="word-spacing" id="name" required>
                        <option value="" disabled selected hidden>Select Developer</option>
                        <?php
                        foreach ($arry as $v) 
                        {
                        ?>            
                        <option value="<?php echo $v[0]?>"><?php echo $v[0]?></option>
                        <?php  
                            }
                        ?>
                    </select> 
                </div>
                 
                <div class="dropdown">
                    <input type="text" name="company" required>
                </div>
               
                <div class="dropdown">
                    <input type="submit" name="submit" value="Recommend">
                </div>

            
            </form> 
                
        </div>

        <table rules="all">
            <thead>
                <th>Name</th>
                <th>Company</th>
                <th>Salary</th>
            </thead>
            <tbody>
                <?php
                    foreach ($arry as $v) 
                    {
                ?>            
                <tr>
                    <td><?php echo $v[0]?></td>
                    <td><?php echo $v[1]?></td>
                    <td>$<?php echo $v[2]?></td>
                </tr>
                <?php  
                    }
                ?>         
            </tbody>
        </table>
        
        

        <footer class="text-center font-large word-spacing">
            ⚡ Jayant Katia 
        </footer>
    </body>
</html>