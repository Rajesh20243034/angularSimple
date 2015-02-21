function MainCtrl ($scope) {
  $scope.people = [
    {
      name: 'John Doe',
      city: 'New York City',
      state: 'New York'
    },
    {
      name: 'John Smith',
      city: 'Oklahoma City',
      state: 'Oklahoma'
    },
    {
      name: 'Henry Black',
      city: 'Topeka',
      state: 'Kansas'
    }
  ];
  $scope.addPerson = function() {
    $scope.people.push({name:$scope.person_name,
                        city:$scope.person_city,
                        state:$scope.person_state
    });

    $scope.person_name = '';
    $scope.person_city = '';
    $scope.person_state = '';
  };
}