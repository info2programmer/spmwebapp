<?php
/**
 * Created by IntelliJ IDEA.
 * User: PROJUKTI WINDOWS 10
 * Date: 20-09-2017
 * Time: 11:28 AM
 *
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "include/head.php"; ?>
</head>

<body>
    <?php include "include/header.php"; ?>
    <section id="mainbody">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="table-responsive">
                        <?php echo form_open('View/attendance'); ?>
                        <?php echo form_hidden('txtFromDate', $txtFromDate); ?>
                        <?php echo form_hidden('txtToDate', $txtToDate); ?>
                        <?php echo form_hidden('txtLocation', $txtLocation); ?>
                        <?php echo form_hidden('txtFactoryName', $txtFactoryName); ?>
                        <table 1254" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl#</th>
                                    <th>Worker Name</th>
                                    <th>Factory Location</th>
                                    <th>Factory Name</th>
                                    <th>Assign From</th>
                                    <th>Assign To</th>
                                    <th>Release Date</th>
                                    <th>Employee Id</th>
                                    <th>Generate Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($search_result)): ?>
                                    <?php $count = 0; ?>
                                    <?php foreach ($search_result as $list): ?>
                                        <tr>
                                            <td><?php echo ++$count; ?></td>
                                            <td><?php echo $list->fname." ".$list->lname ?> </td>
                                            <td><?php echo $list->factory_location ?></td>
                                            <td><?php echo $list->factory_name ?></td>
                                            <td><?php echo $list->from_dare ?></td>
                                            <td><?php echo $list->to_date ?></td>
                                            <td><?php echo $list->release_date ?></td>
                                            <td><?php echo $list->emp_id ?></td>
                                            <td>
                                                <p align="center">
                                                    <?php if (!$list->is_salary_generate): ?>
                                                         <input type="checkbox" name="emp[]" value="<?php echo $list->emp_id_auto ?>" />
                                                     <?php else: ?>
                                                         <input type="checkbox" disabled name="emp[]" value="<?php echo $list->emp_id_auto ?>"  />
                                                    <?php endif ?>
                                                   
                                                </p>

                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php else: ?>
                                    <td colspan="5">No Record Found</td>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <p align="right">
                            <button type="submit" name="btnSubmit" value="submit" class="btn btn-primary btn-lg" style="border-radius:4px;border:1px solid #006633;background-color:rgba(216, 235, 148, 0.78);color:#006633"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;Generate Salary</button>
                        </p>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <?php if (isset($salaryview)): ?>
             <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table-bordered table">
                            <tr>
                                <th>Employee Name</th>
                                <th>Total Salary</th>
                            </tr>
                            <?php foreach ($salaryview as $salary): ?>
                               <?php $totalSalary=$salary->basic_salary+$salary->ca+$salary->hra+$salary->dla ?>
                                <tr><!-- 
                                    <td><?php //echo $salary->half ?></td>
                                    <td><?php //echo $salary->full ?></td> -->
                                    <td><?php echo $salary->fname." ".$salary->lname ?></td>
                                    <td><?php echo ($totalSalary*$salary->half)/2+($totalSalary*$salary->full) ?></td>
                                </tr>                                
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>   
            <?php endif ?>
        </div>
    </section>
</body>
