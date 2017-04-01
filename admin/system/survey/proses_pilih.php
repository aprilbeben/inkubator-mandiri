<script>
Array.prototype.indexOfObjectWithProperty = function(propertyName, propertyValue)
{
    for (var i = 0, len = this.length; i < len; i++) {
        if (this[i][propertyName] === propertyValue) return i;
    }

    return -1;
};


Array.prototype.containsObjectWithProperty = function(propertyName, propertyValue)
{
    return this.indexOfObjectWithProperty(propertyName, propertyValue) != -1;
};


function TestController($scope)
{
    $scope.allPermissions = [
    { "id" : 1, "name" : "ROLE_USER" },
    { "id" : 2, "name" : "ROLE_ADMIN" },
    { "id" : 3, "name" : "ROLE_READ" },
    { "id" : 4, "name" : "ROLE_WRITE" } ];

    $scope.selectedPermissions = [
    { "id" : 1, "name" : "ROLE_USER" },
    { "id" : 3, "name" : "ROLE_READ" } ];

    $scope.toggleSelection = function toggleSelection(permission) {
        var index = $scope.selectedPermissions.indexOfObjectWithProperty('id', permission.id);

        if (index > -1) {
            $scope.selectedPermissions.splice(index, 1);
        } else {
            $scope.selectedPermissions.push(permission);
        }
    };
}
</script>
<div ng-controller="TestController">
    <p ng-repeat="permission in allPermissions">
        <input type="checkbox" ng-checked="selectedPermissions.containsObjectWithProperty('id', permission.id)" ng-click="toggleSelection(permission)" />
        {{permission.name}}
    </p>

    <hr />

    <p>allPermissions: | <span ng-repeat="permission in allPermissions">{{permission.name}} | </span></p>
    <p>selectedPermissions: | <span ng-repeat="permission in selectedPermissions">{{permission.name}} | </span></p>
</div>
