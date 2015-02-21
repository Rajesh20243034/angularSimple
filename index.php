<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Learning AngularJS</title>
</head>
<body>
    <div ng-app ng-controller="MainCtrl">
        <h1>The People App</h1>
        <h4>View People</h4>
        Search: ! <input type="text" ng-model="search">
        <ul>
            <li ng-repeat="person in people | filter:search">
                {{ person.name }} from {{ person.city }}, {{ person.state }}
            </li>
        </ul>

        <h4>Add People</h4>
        Enter the person's name: <input type="text" ng-model="person_name" />
        <br />
        <br />
        Enter the person's city: <input type="text" ng-model="person_city" />
        <br />
        <br />
        Enter the person's state: <input type="text" ng-model="person_state" />
        <br />
        <br />
        <button ng-click="addPerson()">Add the Person!</button>
    </div>
    <script type="text/javascript" src="index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
</body>
</html>