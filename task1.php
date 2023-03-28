$user = new User();
$user->setFirstName('John')
->setLastName('Doe')
->setEmail('john.doe@example.com');

echo '"' . $user->getFirstName . " " . $user->getLastName . " <" . $user->getEmail . ">" .'"';