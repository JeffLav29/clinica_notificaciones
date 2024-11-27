<?php

class Notificacion extends Conectar{
    public function getNotificationsByPatient($patientId) {
        $query = "SELECT title AS eventTitle, start_date AS eventStartDate, end_date AS eventEndDate, 
                        url AS eventUrl, location AS eventLocation, 
                        start_time AS eventStartTime, end_time AS eventEndTime, description AS eventDescription 
                FROM notifications 
                WHERE patient_id = :patientId AND status = 'pending'";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':patientId', $patientId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Devuelve las notificaciones en un arreglo
    }
}

?>