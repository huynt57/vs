<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
    <tr>
        <td align="center">
    <center>
        <table border="0" width="600" cellpadding="0" cellspacing="0">
            <tr>
                <td style="color:#333333 !important; font-size:24px; font-family: Verdana, sans-serif; padding-left:10px;" height="40">
                    <h2 style="font-weight:normal; margin: 20px 0;">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/tick.png" width="30px" height="30px" />   Order Conpleted !</h2>
                    <p style="font-size:18px; line-height:20px;">
                        Thank you for your purchase!								
                        <br/>			
                        Your Order ID: <?php echo $data->id ?>
                        <br/>
                    </p>																																																																																																						
                </td>
            </tr>
        </table>

        <table border="0" width="600" style="color:#333333; font-size:18px; font-family: Verdana, sans-serif; padding-left:0px;">                                               
            <tr>
                <td>Service</td>
                <td>VIP</td>
            </tr>
            <tr>
                <td>Airport</td>
                <td><?php echo $data->airport ?></td>
            </tr>
            <tr>
                <td>A/D</td>
                <td><?php echo $data->type ?></td>
            </tr>                       
            <tr>
                <td>Date</td>
                <td><?php echo $data->date ?></td>
            </tr>          
            <tr>
                <td>Time</td>
                <td><?php echo $data->flight_time ?></td>
            </tr>          
            <tr>
                <td>Flight number</td>
                <td><?php echo $data->flight_number ?></td>
            </tr>                                                        
            <tr>
                <td>Group size</td>
                <td><?php echo $data->size ?></td>
            </tr>          
            <tr>
                <td>Leader's name</td>
                <td><?php echo $data->name ?></td>
            </tr>            
            <tr>
                <td>Address</td>
                <td><?php echo $data->add1 ?></td>
            </tr>            
            <tr>
                <td>Postcode</td>
                <td><?php echo $data->post_code ?></td>
            </tr>            
            <tr>
                <td>Email</td>
                <td><?php echo $data->email ?></td>
            </tr>            
            <tr>
                <td>Primary phone number</td>
                <td><?php echo $data->contact_num ?></td>
            </tr>            
            <tr>
                <td>Alternative phone number</td>
                <td><?php echo $data->contact_num_2 ?></td>
            </tr>            
            <tr>
                <td>Price</td>
                <td>1.290.000 VND</td>
            </tr>            

        </table>
    </center>
</td>
</tr>
</table>						
