<?php

define('DOMAIN', 'http://' . $_SERVER['HTTP_HOST'] . "/");
define('LG', 'レジェンドアドベンチャー');
define('CS', 'チャンピオンスタジアム');
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
    header('location:' . DOMAIN . $path);
    exit();
}


function show_error_message()
{
    header('location' . DOMAIN . 'HTML/index.html');
    exit();
}

function get_enemy1($eventnumber)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select e1.enemy_id, e1.enemy_name as e1, eventnumber, party.party_id from legendary_gauntlet as LG
    left join party on party.legendary_gauntlet_id = LG.legendary_gauntlet_id
    left join enemy as e1 on e1.enemy_id = LG.enemy_id1
    where eventnumber = ?");
    $st->bindValue(1, $eventnumber);
    $st->execute();
    $enemy = $st->fetch();

    $pdo = null;
    $st = null;

    return $enemy;
}


function get_enemy2($eventnumber)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select e2.enemy_id, e2.enemy_name as e2, eventnumber, party.party_id from legendary_gauntlet as LG
    left join party on party.legendary_gauntlet_id = LG.legendary_gauntlet_id
    left join enemy as e2 on e2.enemy_id = LG.enemy_id2
    where eventnumber = ?");
    $st->bindValue(1, $eventnumber);
    $st->execute();
    $enemy = $st->fetch();

    $pdo = null;
    $st = null;

    return $enemy;
}

function get_enemy3($eventnumber)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select e3.enemy_id, e3.enemy_name as e3, eventnumber, party.party_id from legendary_gauntlet as LG
    left join party on party.legendary_gauntlet_id = LG.legendary_gauntlet_id
    left join enemy as e3 on e3.enemy_id = LG.enemy_id3
    where eventnumber = ?");
    $st->bindValue(1, $eventnumber);
    $st->execute();
    $enemy = $st->fetch();

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

function get_LGParty($category_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct party.party_id, party.enemy_id, partydetails.trainer_id1, partydetails.trainer_id2, partydetails.trainer_id3, eventnumber, trainer.trainer_name, partycategory.category_name from party
    left join legendary_gauntlet as LG on LG.legendary_gauntlet_id = party.legendary_gauntlet_id
    left join enemy as e1 on e1.enemy_id = party.enemy_id
    left join enemy as e2 on e2.enemy_id = party.enemy_id
    left join enemy as e3 on e3.enemy_id = party.enemy_id
    left join partydetails on partydetails.party_id = party.party_id
    left join trainer on trainer.trainer_id = partydetails.trainer_id3
    left join partycategory on partycategory.category_id = party.category_id
    where party.category_id = ?");
    $st->bindValue(1, $category_id);
    $st->execute();
    $party = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $party;
}

function get_CSList($type_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select party.party_id, trainer.trainer_name, party.type_id, type_name from party
    left join partydetails on partydetails.party_id = party.party_id
    left join type on type.type_id = party.type_id
    left join trainer on trainer.trainer_id = partydetails.trainer_id3
    where party.type_id = ?");
    $st->bindValue(1, $type_id);
    $st->execute();
    $party = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $party;
}

function get_partyList()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct distinct LG.name, LG.eventnumber, partycategory.category_id, partycategory.category_name from party
    left join legendary_gauntlet as LG on LG.legendary_gauntlet_id = party.legendary_gauntlet_id
    left join partycategory on partycategory.category_id = party.category_id");
    $st->execute();
    $partyList = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $partyList;
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

function get_attacker()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, role.role_name, EX_flg, potential, stars from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join role on role.role_id = trainer.role_id
    where trainer.role_id = 1");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}


function get_technical()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, role.role_name, EX_flg, potential, stars from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join role on role.role_id = trainer.role_id
    where trainer.role_id = 2");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}


function get_support()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, role.role_name, EX_flg, potential, stars from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join role on role.role_id = trainer.role_id
    where trainer.role_id = 3");
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
    $st = $pdo->prepare("select details.party_id, t1.trainer_id as ti1, t1.trainer_name as t1, s1.sync_name as s1, t1.EX_flg, lucky_skills.lucky_skill_name, t1.potential, details.PoMaTool_URL from partydetails as details
    left join party on party.party_id = details.party_id
    left join trainer as t1 on t1.trainer_id = details.trainer_id1
    left join sync as s1 on s1.sync_id = t1.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = details.lucky_skill_id1
    where party.party_id = ?");
    $st->bindValue(1, $party_id);
    $st->execute();
    $charcter1 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $charcter1;
}


function charcter2($party_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select details.party_id, t2.trainer_id as ti2,  t2.trainer_name as t2, s2.sync_name as s2, t2.EX_flg, lucky_skills.lucky_skill_name, t2.potential, details.PoMaTool_URL from partydetails as details
    left join party on party.party_id = details.party_id
    left join trainer as t2 on t2.trainer_id = details.trainer_id2
    left join sync as s2 on s2.sync_id = t2.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = details.lucky_skill_id2
    where party.party_id = ?");
    $st->bindValue(1, $party_id);
    $st->execute();
    $charcter2 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $charcter2;
}


function charcter3($party_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select details.party_id, t3.trainer_id as ti3, t3.trainer_name as t3, s3.sync_name as s3, t3.EX_flg, lucky_skills.lucky_skill_name, t3.potential, details.PoMaTool_URL from partydetails as details
    left join party on party.party_id = details.party_id
    left join trainer as t3 on t3.trainer_id = details.trainer_id3
    left join sync as s3 on s3.sync_id = t3.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = details.lucky_skill_id3
    where party.party_id = ?");
    $st->bindValue(1, $party_id);
    $st->execute();
    $charcter3 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $charcter3;
}

function delete1($trainer_id1)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update partydetails set trainer_id1 = null where trainer_id1 = ?");
    $st->bindValue(1, $trainer_id1);
    $st->execute();

    $pdo = null;
    $st = null;
}

function delete2($trainer_id2)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update partydetails set trainer_id2 = null where trainer_id2 = ?");
    $st->bindValue(1, $trainer_id2);
    $st->execute();

    $pdo = null;
    $st = null;
}

function delete3($trainer_id3)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update partydetails set trainer_id3 = null where trainer_id3 = ?");
    $st->bindValue(1, $trainer_id3);
    $st->execute();

    $pdo = null;
    $st = null;
}
