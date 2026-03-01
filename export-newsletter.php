<?php
require_once 'config.php';

if (!isAdmin()) {
    header('Location: admin-login.php');
    exit();
}

$conn = getDB();

$filename = 'newsletter_' . date('Y-m-d') . '.csv';

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$output = fopen('php://output', 'w');
fputcsv($output, ['Email', 'Date d\'inscription', 'Statut']);

$sql = "SELECT email, date_inscription, statut FROM newsletter_inscriptions ORDER BY date_inscription DESC";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    fputcsv($output, [
        $row['email'],
        $row['date_inscription'],
        $row['statut'] == 'actif' ? 'Actif' : 'Désinscrit'
    ]);
}

fclose($output);
$conn->close();
exit();
?>