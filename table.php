<?php
$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];

function getMotivationNote($gpa) {
    if ($gpa >= 90) {
        return "🌟 Excellent work! Keep it up 🎉";
    } elseif ($gpa >= 75) {
        return "🔥 Good job! Keep trying 💪";
    } else {
        return "🚀 Don't give up! Keep pushing 🙌";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg, #a8edea, #fed6e3); min-height: 100vh;">

<div class="container my-5">
    <h2 class="text-center mb-4 text-dark">🎓 Students Performance</h2>

    <table class="table table-bordered table-hover table-striped text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student No</th>
                <th>Name</th>
                <th>Email</th>
                <th>GPA</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($students as $student) { 
                $note = getMotivationNote($student['stdGAP']);
                echo "<tr>";
                echo "<td>" . $i++ . "</td>";
                echo "<td>" . $student['stdNo'] . "</td>";
                echo "<td>" . $student['stdName'] . "</td>";
                echo "<td>" . $student['stdEmail'] . "</td>";
                echo "<td class='fw-bold text-success'>" . $student['stdGAP'];
                if ($student['stdGAP'] >= 90) {
                    echo " <i class='bi bi-star-fill text-warning'></i>";
                }
                echo "</td>";
                echo "<td>" . $note . "</td>";
                echo "</tr>";
            } ?>
            <tr class="table-success fw-bold">
                <td colspan="2">Total Students</td>
                <td><?php echo count($students); ?></td>
                <td colspan="3"></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
