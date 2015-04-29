<!DOCTYPE html>
<html lang="hu">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<style>
    table, th , td {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 5px;
    }
    table tr:nth-child(odd) {
        background-color: #f1f1f1;
    }
    table tr:nth-child(even) {
        background-color: #ffffff;
    }
</style>
<body>

<!-- div ng-app="">
    <p>Name : <input type="text" ng-model="name"></p>
    <h1>Hello {{name}}</h1>
</div -->

<!-- ############################## -->

<!-- div ng-app="">
    <p>Name: <input type="text" ng-model="name"></p>
    <p ng-bind="name"></p>
</div -->

<!-- ############################## -->

<!-- div ng-app="" ng-init="firstName='Gabor'">

    <p>The name is <span ng-bind="firstName"></span></p>

</div -->

<!-- ############################## -->

<!-- div ng-app="">
    <p>Name: <input type="text" ng-model="name"></p>
    <p>{{name}}</p>
</div -->

<!-- ############################## -->

<!-- div ng-app="myApp" ng-controller="myCtrl">

    First Name: <input type="text" ng-model="firstName"><br>
    Last Name: <input type="text" ng-model="lastName"><br>
    <br>
    Full Name: {{firstName + " " + lastName}}

</div -->

<script>
    /*
    //modul meghatározása --> ng-app="myApp"
    var app = angular.module('myApp', []);

    //controller meghatározása --> ng-controller="myCtrl"
    app.controller('myCtrl', function($scope) {
        $scope.firstName= "B";
        $scope.lastName= "G";
    });
    */
</script>

<!-- ############################## -->


<!-- div ng-app="" ng-init="quantity=3;cost=5">

    <p>Total in dollar: {{ quantity * cost }}</p>

    <p>Total in dollar:: <span ng-bind="quantity * cost"></span></p>

</div -->

<!-- ############################## -->

<!-- div ng-app="" ng-init="firstName='John';lastName='Doe'">

    <p>The name is {{ firstName + " " + lastName }}</p>

    <p>The name is:: <span ng-bind="firstName + ' ' + lastName"></span></p>

</div -->

<!-- ############################## -->
<!-- Objektum elemének kiirása -->
<!-- div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">

    <p>The name is {{ person.lastName + " " + person.firstName }}</p>

    <p>The name is <span ng-bind="person.lastName"></span></p>

</div -->

<!-- ############################## -->
<!-- Hivatkozás a tömb elemére -->
<!-- div ng-app="" ng-init="points=[1,13,19,2,40]">

    <p>The third result is {{ points[2] }}</p>

    <p>The third result is <span ng-bind="points[1]"></span></p>

</div -->

<!-- ############################## -->

<!-- text értékét kiirjuk, de azdunk egy alapértéket is -->
<!-- div ng-app="" ng-init="firstName='Valaki'">

    <p>Name: <input type="text" ng-model="firstName"></p>
    <p>You wrote: {{ firstName }}</p>

</div -->

<!-- ############################## -->

<!-- Értékek összeszorzása -->
<!-- div ng-app="" ng-init="darab=1;ar=5">

    Darab: <input type="number"	ng-model="darab">
    Ár:    <input type="number" ng-model="ar">

    Total: {{ darab * ar }}

</div -->

<!-- ############################## -->

<!-- Tömb kiirása -->
<!-- div ng-app="" ng-init="names=['Jani','Hege','Kai']">
    <ul>
        <li ng-repeat="x in names">
            {{ x }}
        </li>
    </ul>
</div -->

<!-- ############################## -->

<!-- Tömb kiirása -->
<!-- div ng-app="" ng-init="names=[
{name:'Jani',country:'Norway'},
{name:'Hege',country:'Sweden'},
{name:'Kai',country:'Denmark'}]">

    <ul>
        <li ng-repeat="x	in names">
            {{ x.name + ', ' + x.country }}
        </li>
    </ul>

</div -->

<!-- ############################## -->

<!-- div ng-app="myApp" ng-controller="personCtrl">

    First Name: <input type="text" ng-model="firstName"><br>
    Last Name: <input type="text" ng-model="lastName"><br>
    <br>
    Full Name: {{fullName()}}

</div -->

<script>
    /*s
    var app = angular.module('myApp', []);
    app.controller('personCtrl', function($scope) {
        $scope.firstName = "John";
        $scope.lastName = "Doe";
        $scope.fullName = function() {
            return $scope.firstName + " " + $scope.lastName;
        }
    });
    */
</script>

<!-- ############################## -->

<!-- div ng-app="myApp" ng-controller="personCtrl">

    First Name: <input type="text" ng-model="firstName"><br>
    Last Name: <input type="text" ng-model="lastName"><br>
    <br>
    Full Name: {{firstName + " " + lastName}}

</div>

<script src="personcontroller.js"></script -->

<!-- ############################## -->

<!-- div ng-app="myApp" ng-controller="namesCtrl">

    <ul>
        <li ng-repeat="x in names">
            {{ x.name + ', ' + x.country }}
        </li>
    </ul>

</div>

<script src="namesController.js"></script -->

<!-- ############################## -->

<!-- div ng-app="myApp" ng-controller="personCtrl">

    <p>The name is {{ lastName | uppercase }}</p>

    <p>The name is {{ lastName | lowercase }}</p>
</div>


<script src="personcontroller.js"></script -->

<!-- ############################## -->

<!-- div ng-app="myApp" ng-controller="costCtrl">

    <input type="number" ng-model="quantity">
    <input type="number" ng-model="price">

    <p>Total = {{ (quantity * price) | currency }}</p>

</div>
<script>
    var app = angular.module('myApp', []);
    app.controller('costCtrl', function($scope) {
        $scope.quantity = 1;
        $scope.price = 9.99;
    });
</script -->

<!-- ############################## -->

<!-- div ng-app="myApp" ng-controller="namesCtrl">

    <ul>
        <li ng-repeat="x in names | orderBy:'country'">
            {{ x.name + ', ' + x.country }}
        </li>
    </ul>

<div>
<script src="namesController.js"></script -->

<!-- ############################## -->

<!-- div ng-app="myApp" ng-controller="namesCtrl">

        <p>Filtering input:</p>

        <p><input type="text" ng-model="test"></p>

        <ul>
            <li ng-repeat="x in names | filter:test | orderBy:'country'">
                {{ (x.name | uppercase) + ', ' + x.country }}
            </li>
        </ul>

</div>

<script src="namesController.js"></script -->

<!-- ############################## -->

<div ng-app="myApp" ng-controller="customersCtrl">

    <table>
        <tr ng-repeat="x in names">
            <td>{{ x.Name }}</td>
            <td>{{ x.Country }}</td>
        </tr>
    </table>

    <table>
        <tr ng-repeat="x in names">
            <td>{{ x.Name }}</td>
            <td>{{ x.Country | uppercase }}</td>
        </tr>
    </table>

    <table>
        <tr ng-repeat="x in names">
            <td>{{ $index + 1 }}</td>
            <td>{{ x.Name }}</td>
            <td>{{ x.Country }}</td>
        </tr>
    </table>

</div>

<script>
    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function($scope, $http) {
        $http.get("customer.php")
            .success(function (response) {$scope.names = response.records;});
    });
</script>


</body>
</html>