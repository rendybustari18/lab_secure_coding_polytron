<?php
    
    try {
        $url = 'api/auth/login';
        $payload['email'] = $email;
        $payload['password'] = $password;
        $apiKey = API_KEY;
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/json',
                "x-api-key: $apiKey"
            ],
            CURLOPT_POSTFIELDS     => json_encode($payload)
        ]);

        $raw = curl_exec($ch);
        $err = curl_error($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        echo json_decode($raw, true);
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Failed to fetch user data']);
    }