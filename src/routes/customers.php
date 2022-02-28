<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Get All Users

$app->get('/api/customers', function (Request $request, Response $response) {
    $sql = "SELECT * FROM customers";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->query($sql);
        $customers = $stmt->fetchAll((PDO::FETCH_OBJ));
        $db = null;
        $response->getBody()->write(json_encode($customers));
    } catch (PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
    return $response;
});

// Get Single User

$app->get('/api/customer/{id}', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM customers WHERE id = $id";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->query($sql);
        $customer = $stmt->fetchAll((PDO::FETCH_OBJ));
        $db = null;
        $response->getBody()->write(json_encode($customer));
    } catch (PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
    return $response;
});

// Add User

$app->post('/api/customer/add', function (Request $request, Response $response) {
    $first_name = $request->getParam('first_name');
    $last_name = $request->getParam('last_name');
    $phone = $request->getParam('phone');
    $email = $request->getParam('email');
    $address = $request->getParam('address');
    $city = $request->getParam('city');
    $state = $request->getParam('state');

    $sql = "INSERT INTO customers (first_name, last_name, phone, email, address, city, state) VALUES 
    (:first_name, :last_name, :phone, :email, :address, :city, :state)";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':first_name',     $first_name);
        $stmt->bindParam(':last_name',      $last_name);
        $stmt->bindParam(':phone',          $phone);
        $stmt->bindParam(':email',          $email);
        $stmt->bindParam(':address',        $address);
        $stmt->bindParam(':city',           $city);
        $stmt->bindParam(':state',          $state);

        $stmt->execute();
        $message = 'Notice: Customer Added';
        $response->getBody()->write(json_encode($message));
    } catch (PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
    return $response;
});

// Update User

$app->put('/api/customer/update/{id}', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');
    $first_name = $request->getParam('first_name');
    $last_name = $request->getParam('last_name');
    $phone = $request->getParam('phone');
    $email = $request->getParam('email');
    $address = $request->getParam('address');
    $city = $request->getParam('city');
    $state = $request->getParam('state');

    $sql = "UPDATE customers SET
        first_name = :first_name,
        last_name = :last_name,
        phone = :phone,
        email = :email,
        address = :address,
        city = :city,
        state = :state
    WHERE id = $id";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':first_name',     $first_name);
        $stmt->bindParam(':last_name',      $last_name);
        $stmt->bindParam(':phone',          $phone);
        $stmt->bindParam(':email',          $email);
        $stmt->bindParam(':address',        $address);
        $stmt->bindParam(':city',           $city);
        $stmt->bindParam(':state',          $state);

        $stmt->execute();
        $message = 'Notice: User Updated';
        $response->getBody()->write(json_encode($message));
    } catch (PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
    return $response;
});

// Delete Single User

$app->delete('/api/customer/delete/{id}', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');
    $sql = "DELETE FROM customers WHERE id = $id";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $db = null;
        $message = 'Notice: User Deleted';
        $response->getBody()->write(json_encode($message));
    } catch (PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
    return $response;
});