
<!DOCTYPE html>
<html>
<head>
    <title>Test API</title>
</head>
<body>
    <h1>Test API</h1>

    <h2>Employees</h2>

    <form action="/api/employees" method="GET">
        <button type="submit">Liste des employés</button>
    </form>

    <form action="/api/employees" method="POST">
        <label for="first_name">Prénom :</label>
        <input type="text" name="first_name" id="first_name"><br>

        <label for="last_name">Nom :</label>
        <input type="text" name="last_name" id="last_name"><br>

        <label for="address">Adresse :</label>
        <input type="text" name="address" id="address"><br>

        <label for="account_number">Numéro de compte :</label>
        <input type="text" name="account_number" id="account_number"><br>

        <label for="grade">Grade :</label>
        <input type="text" name="grade" id="grade"><br>

        <label for="superior_id">ID supérieur :</label>
        <input type="text" name="superior_id" id="superior_id"><br>

        <button type="submit">Ajouter un employé</button>
    </form>

    <h2>Tasks</h2>

    <form action="/api/tasks" method="GET">
        <button type="submit">Liste des tâches</button>
    </form>

    <form action="/api/tasks" method="POST">
        <label for="description">Description :</label>
        <input type="text" name="description" id="description"><br>

        <label for="employee_id">ID employé :</label>
        <input type="text" name="employee_id" id="employee_id"><br>

        <button type="submit">Ajouter une tâche</button>
    </form>
</body>
</html>
