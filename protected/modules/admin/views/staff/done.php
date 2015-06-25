<div class="container-fluid" id="content">
    <div id="left">			
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Airport Staff</span></a>
            </div>
            <ul class="subnav-menu">					            
                <li>
                    <a href="<?php echo Yii::app()->createUrl('admin/staff')?>">To do list</a>
                </li>			
                <li class="active">
                    <a href="<?php echo Yii::app()->createUrl('admin/staff/done')?>">Done!</a>
                </li>							
            </ul>				
        </div>						
    </div>

    <div id="main">
        <div class="container-fluid">				
            <div class="row-fluid">
                <div class="span12">				
                    <div class="box box-color box-bordered">
                        <div class="box-title">
                            <h3>
                                Done! - List of orders which you have completed
                            </h3>
                        </div>
                        <div class="box-content nopadding">
                            <table class="table table-hover table-nomargin table-bordered usertable">
                                <thead>
                                    <tr class='thefilter'>
                                        <th></th>
                                        <th>Leader</th>
                                        <th>Airport</th>
                                        <th class='hidden-350'>A/D</th>
                                        <th class='hidden-1024'>Date</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th class='hidden-480'></th>
                                    </tr>
                                    <tr>
                                        <th>ID</th>
                                        <th>Leader</th>
                                        <th>Airport</th>
                                        <th class='hidden-350'>A/D</th>
                                        <th class='hidden-1024'	>Date</th>
                                        <th>Time</th>
                                        <th>Flight number</th>
                                        <th>Group size</th>
                                        <th>Phonenumber</th>
                                        <th class='hidden-480'>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orders as $order): ?>
                                        <tr>
                                            <td>
                                                <?php echo $order->id ?>
                                            </td>
                                            <td><?php echo $order->name ?></td>
                                            <td><?php echo $order->airport ?></td>
                                            <td class='hidden-350'><?php echo $order->type ?></td>
                                            <td class='hidden-1024'><?php echo $order->date ?></td>
                                            <td><?php echo $order->flight_time ?></td>
                                            <td><?php echo $order->flight_number ?></td>
                                            <td><?php echo $order->size ?></td>
                                            <td><?php echo $order->contact_num ?></td>
                                            <td class='hidden-480'>
                                                    <!-- <a href="#" class="btn" rel="tooltip" title="Show"><i class="icon-search"></i></a> -->
                                                <a href="cpanel-accept.html?id=1#" class="btn" rel="tooltip" title="Done!"><i class="icon-check"></i></a>	
                                                <a href="#" class="btn" rel="tooltip" title="Reject"><i class="icon-remove"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>							
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>						
            </div>
        </div>				
    </div>
</div>
