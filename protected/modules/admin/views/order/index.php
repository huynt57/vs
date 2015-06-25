<div class="container-fluid" id="content">
    <div id="left">			
        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Orders</span></a>
            </div>
            <ul class="subnav-menu">					
                <li>
                    <a href="#">View</a>
                </li>
                <li>
                    <a href="<?php echo Yii::app()->createUrl('admin/order/add'); ?>">Add</a>
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
                                Orders
                            </h3>
                        </div>
                        <?php
                        foreach (Yii::app()->user->getFlashes() as $key => $message) {
                            echo '<span class="help-block error">' . $message . '</span>';
                        };
                        ?>
                        <div class="box-content nopadding">
                            <table class="table table-hover table-nomargin table-bordered usertable">
                                <thead>
                                    <tr class='thefilter'>
                                        <th class='with-checkbox'></th>
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
                                        <th class='with-checkbox'><input type="checkbox" name="check_all" id="check_all"></th>
                                        <th>Leader</th>
                                        <th>Airport</th>
                                        <th class='hidden-350'>A/D</th>
                                        <th class='hidden-1024'	>Date</th>
                                        <th>Time</th>
                                        <th>Flight number</th>
                                        <th>Group size</th>
                                        <th>Phone number</th>
                                        <th class='hidden-480'>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orders as $order): ?>
                                        <tr>
                                            <td class="with-checkbox">
                                                <input type="checkbox" name="check" value="1">
                                            </td>
                                            <td><?php echo $order->name; ?></td>
                                            <td><?php echo $order->airport; ?></td>
                                            <td class='hidden-350'><?php echo $order->type; ?></td>
                                            <td class='hidden-1024'<?php echo $order->date; ?></td>
                                            <td><?php echo $order->name; ?></td>
                                            <td><?php echo $order->flight_number; ?></td>
                                            <td><?php echo $order->size; ?></td>
                                            <td><?php echo $order->contact_num; ?></td>
                                            <td class='hidden-480'>
                                                    <!-- <a href="#" class="btn" rel="tooltip" title="Show"><i class="icon-search"></i></a> -->
                                                <a href="<?php echo Yii::app()->createUrl('admin/order/edit?id=' . $order->id) ?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                                <a href="<?php echo Yii::app()->createUrl('admin/order/delete?id=' . $order->id) ?>" class="btn" rel="tooltip" title="Delete" id="delete_order"><i class="icon-remove"></i></a>
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
<script>
    $(document).ready(function() {
        $('#delete_order').click(function() {
            alert("Sure ?. This task cannot roll back !!!");
        });
    });
</script>