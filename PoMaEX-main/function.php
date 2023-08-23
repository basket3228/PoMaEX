<?php

define('DOMAIN', 'http://' . $_SERVER['HTTP_HOST'] . "/");
define('DB_CONNECTION_STRING', 'mysql:host=localhost;dbname=pokemas');

function special($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function get_connection()
{
    try {
        $pdo = new PDO(DB_CONNECTION_STRING, 'root', 'admin');
        return $pdo;
    } catch (PDOException $e) {
        show_error_message();
    }
}

function redirect($path)
{
    header('location' . DOMAIN . $path);
    exit();
}


function show_error_message()
{
    header('location' . DOMAIN . 'HTML/index.html');
    exit();
}

function get_enemy()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select enemy_id, enemy_name from enemy");
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $enemy;
}

function get_lucky_skill()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select lucky_skill_id, lucky_skill_name from lucky_skills");
    $st->execute();
    $lucky_skill = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $lucky_skill;
}

function get_party()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select party.party_id, party_name, trainer.trainer_name, partycategory.category_name from party
    left join partydetails on partydetails.party_id = party.party_id
    left join trainer on trainer.trainer_id = partydetails.trainer_id3
    left join partycategory on partycategory.category_id = party.category_id");
    $st->execute();
    $party = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $party;
}

function get_partyCategory()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select category_id, category_name, enemy.enemy_name from partycategory
    left join enemy on enemy.enemy_id = partycateogry.enemy_id");
    $st->execute();
    $partyCategory = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $partyCategory;
}

function get_role()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select role_id, role_name from role");
    $st->execute();
    $role = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $role;
}

function get_sync()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select sync_id, sync_name, type.type_name from sync
    left join type on type.type_id = sync.type_id");
    $st->execute();
    $lucky_skill = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $lucky_skill;
}

function get_trainer()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, role.role_name, EX_flg, potential, stars from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join role on role.role_id = trainer.role_id");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function get_type()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select type_id, type_name from type");
    $st->execute();
    $type = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $type;
}

function charcter1($party_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select details.party_id, t1.trainer_name as t1, t1.EX_flg, lucky_skills.lucky_skill_name, t1.potential, details.PoMaTool_URL from partydetails as details
    left join party on party.party_id = details.party_id
    left join trainer as t1 on t1.trainer_id = details.trainer_id1
    left join lucky_skills on lucky_skills.lucky_skill_id = details.lucky_skill_id1
    where party.party_id = ?");
    $st->bindValue(1, '$party_id');
    $st->execute();
    $charcter1 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $charcter1;
}


function charcter2()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select details.party_id, t2.trainer_name as t2, t2.EX_flg, lucky_skills.lucky_skill_name, t2.potential, details.PoMaTool_URL from partydetails as details
    left join party on party.party_id = details.party_id
    left join trainer as t2 on t2.trainer_id = details.trainer_id2
    left join lucky_skills on lucky_skills.lucky_skill_id = details.lucky_skill_id2");
    $st->execute();
    $charcter2 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $charcter2;
}


function charcter3()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select details.party_id, t3.trainer_name as t3, t3.EX_flg, lucky_skills.lucky_skill_name, t3.potential, details.PoMaTool_URL from partydetails as details
    left join party on party.party_id = details.party_id
    left join trainer as t3 on t3.trainer_id = details.trainer_id3
    left join lucky_skills on lucky_skills.lucky_skill_id = details.lucky_skill_id3");
    $st->execute();
    $charcter3 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $charcter3;
}
