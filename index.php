<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ToDo Project</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body ng-app="todoApp" >
<div class="container">
    <div class="row">
        <div class="col-lg-12" ng-controller="todoController">
            <h4 class="text-center">To Do List With AngularJS</h4>
            <br><br>
            <div class="col-lg-6 col-lg-push-3">

                <input type="text" placeholder="I have to do..." class="form-control input-lg" ng-model="title"> <br>
                <button ng-click="add()"class="btn btn-primary pull-right">Add</button>

                <br><br><br>
                <h4 class="text-center"> List of Tasks</h4>
                <ul>
                    <li ng-repeat="t in tasks">{{t}}<button ng-click="delete()"class="btn btn-danger pull-right">Delete</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="js/angular.min.js"></script>
<script src="js/todo.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: csulbaran
 * Date: 08/03/16
 * Time: 12:07 AM
 */
