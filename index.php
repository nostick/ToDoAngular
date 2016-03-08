<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ToDo Project</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .clicked_true{
            text-decoration:line-through;
        }
    </style>

</head>
<body ng-app="todoApp" >
<div class="container">
    <div class="row">
        <div class="col-lg-12" ng-controller="todoController">
            <h4 class="text-center">To Do List With AngularJS</h4>
            <br><br>
            <div class="col-lg-6 col-lg-push-3">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" placeholder="I have to do.." ng-model="title">
                    <span class="input-group-btn">
                          <button class="btn btn-primary btn-lg" type="button" ng-click="add()">Add!</button>
                    </span>
                </div><!-- /input-group -->
                <br><br><br>

                <h4 class="text-center"> List of Tasks</h4>
                <ul style="list-style: none;">

                    <li ng-repeat="t in tasks">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" class="form-control clicked_{{t.completed}}" readonly="readonly" aria-label="..." value="{{t.title}}">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="checkbox" ng-click="done()">{{isDone}}</button>
                                    <button class="btn btn-danger" type="button" ng-click="delete()">X!</button>
                                </div>
                            </div>
                            <br>
                        </div>

                    </li>
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
