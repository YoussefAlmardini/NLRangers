<?php

class AnonymousLocation extends Model
{
    protected $table = 'user';
    protected $fields = [
        'location_id',
        'latitude',
        'longitude',
        'date'
    ];

    public function saveLocation($latitude, $longitude, $organisation_id)
    {
        $query = 'INSERT INTO anonymous_user_locations (latitude, longitude, date, organisation_id) VALUES (:latitude, :longitude, :date, :organisation_id);';
        $db = DB::connect();
        $stmt = $db->prepare($query);
        $stmt->bindValue(':latitude', $latitude);
        $stmt->bindValue(':longitude', $longitude);
        $stmt->bindValue(':organisation_id', $organisation_id);
        $stmt->bindValue(':date', date('Y-m-d'));
        $stmt->execute();
    }

    public function getLocationsArr($startDate, $endDate, $organisationName)
    {
        $query = 'SELECT organisation_id FROM organisations WHERE name = :name;';
        $db = DB::connect();
        $stmt = $db->prepare($query);
        $stmt->bindValue(':name', trim($organisationName));
        $stmt->execute();
        $organisationID = $stmt->fetchAll();

        $query = 'SELECT latitude, longitude FROM anonymous_user_locations WHERE date >= :startDate AND date <= :endDate AND organisation_id = :organisation_id;';
        $db = DB::connect();
        $stmt = $db->prepare($query);
        $stmt->bindValue(':startDate', $startDate);
        $stmt->bindValue(':endDate', $endDate);
        $stmt->bindValue(':organisation_id', $organisationID[0]['organisation_id']);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
