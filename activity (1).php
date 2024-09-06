<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands-on Activity</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Hands-on Activity</h1>

    <?php
        $table = array(
            "header" => array(
               "StudentId", 
               "Firstname",
                "Middlename",
                "Lastname",
                "Section",
                "Course",
                "Yearlevel"
            ),
            "body" => array(
                array(
                  "StudentId" => "1",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "2",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "3",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "4",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "5",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "6",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "7",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "8",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "9",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
                array(
                  "StudentId" => "10",
                    "Firstname" => "Firstname",
                    "Middlename" => "Middlename",
                    "Lastname" => "Lastname",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "Yearlevel"
                ),
               
         
                // More rows as needed
            ),
        );
    ?>




<table>
        <thead>
            <tr>
                <?php foreach ($table['header'] as $header): ?>
                    <th><?php echo htmlspecialchars($header); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($table['body'] as $row): ?>
                <tr>
                    <?php foreach ($table['header'] as $header): ?>
                        <td><?php echo htmlspecialchars($row[$header]); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>        



