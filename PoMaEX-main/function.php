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

function get_enemy1($eventnumber)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select e1.enemy_id, e1.enemy_name as e1, eventnumber, LGparty.LGparty_id from LGparty
    left join enemy as e1 on e1.enemy_id = LGparty.enemy_id1
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
    $st = $pdo->prepare("select e2.enemy_id, e2.enemy_name as e2, eventnumber, LGparty.LGparty_id from LGparty
    left join enemy as e2 on e2.enemy_id = LGparty.enemy_id2
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
    $st = $pdo->prepare("select e3.enemy_id, e3.enemy_name as e3, eventnumber, LGparty.LGparty_id from LGparty
    left join enemy as e3 on e3.enemy_id = LGparty.enemy_id3
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

function get_LGParty($eventnumber)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct LG.LGparty_id, LG.category_id, LG.eventnumber, LG.enemy_id1, LG.enemy_id2, LG.enemy_id3, trainer.trainer_name, LGdetail.LGparty_id from LGparty as LG
    left join LGdetail on LGdetail.LGparty_id = LG.LGparty_id
    left join trainer on trainer.trainer_id = LGdetail.trainer_id1
    where LG.eventnumber = ?");
    $st->bindValue(1, $eventnumber);
    $st->execute();
    $party = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $party;
}

function get_CSList($type_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select CSparty.CSparty_id, CSparty.category_id, trainer.trainer_name, CSparty.type_id, type_name, CSdetail.CSparty_id from CSparty
    left join CSdetail on CSdetail.CSparty_id = CSparty.CSparty_id
    left join type on type.type_id = CSparty.type_id
    left join trainer on trainer.trainer_id = CSdetail.trainer_id3
    where CSparty.type_id = ?");
    $st->bindValue(1, $type_id);
    $st->execute();
    $CSparty = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $CSparty;
}

function get_LGpartyList()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct LG.name, LG.eventnumber, partycategory.category_id, partycategory.category_name from LGparty as LG
    left join partycategory on partycategory.category_id = LG.category_id");
    $st->execute();
    $partyList = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $partyList;
}

function get_partyCategory()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select category_id, category_name from partycategory");
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

function LG1($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select LGdetail.LGparty_id, LGparty.category_id, t1.trainer_id as ti1, t1.trainer_name as t1, s1.sync_name as s1, t1.EX_flg, lucky_skills.lucky_skill_name, t1.potential, LGdetail.PoMaTool_URL1 from LGdetail
    left join LGparty on LGparty.LGparty_id = LGdetail.LGparty_id
    left join trainer as t1 on t1.trainer_id = LGdetail.trainer_id1
    left join sync as s1 on s1.sync_id = t1.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = LGdetail.lucky_skill_id1
    where LGparty.LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();
    $LG1 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $LG1;
}


function LG2($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select LGdetail.LGparty_id, LGparty.category_id, t2.trainer_id as ti2, t2.trainer_name as t2, s2.sync_name as s2, t2.EX_flg, lucky_skills.lucky_skill_name, t2.potential, LGdetail.PoMaTool_URL2 from LGdetail
    left join LGparty on LGparty.LGparty_id = LGdetail.LGparty_id
    left join trainer as t2 on t2.trainer_id = LGdetail.trainer_id2
    left join sync as s2 on s2.sync_id = t2.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = LGdetail.lucky_skill_id2
    where LGparty.LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();
    $LG2 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $LG2;
}

function LG3($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select LGdetail.LGparty_id, LGparty.category_id, t3.trainer_id as ti3, t3.trainer_name as t3, s3.sync_name as s3, t3.EX_flg, lucky_skills.lucky_skill_name, t3.potential, LGdetail.PoMaTool_URL3 from LGdetail
    left join LGparty on LGparty.LGparty_id = LGdetail.LGparty_id
    left join trainer as t3 on t3.trainer_id = LGdetail.trainer_id3
    left join sync as s3 on s3.sync_id = t3.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = LGdetail.lucky_skill_id3
    where LGparty.LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();
    $LG3 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $LG3;
}

function CS1($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select CSdetail.CSparty_id, t1.trainer_id as ti1, t1.trainer_name as t1, s1.sync_name as s1, t1.EX_flg, lucky_skills.lucky_skill_name, t1.potential, CSdetail.PoMaTool_URL1 from CSdetail
    left join CSparty on CSparty.CSparty_id = CSdetail.CSparty_id
    left join trainer as t1 on t1.trainer_id = CSdetail.trainer_id1
    left join sync as s1 on s1.sync_id = t1.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = CSdetail.lucky_skill_id1
    where CSparty.CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();
    $CS1 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $CS1;
}


function CS2($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select CSdetail.CSparty_id, t2.trainer_id as ti2, t2.trainer_name as t2, s2.sync_name as s2, t2.EX_flg, lucky_skills.lucky_skill_name, t2.potential, CSdetail.PoMaTool_URL2 from CSdetail
    left join CSparty on CSparty.CSparty_id = CSdetail.CSparty_id
    left join trainer as t2 on t2.trainer_id = CSdetail.trainer_id2
    left join sync as s2 on s2.sync_id = t2.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = CSdetail.lucky_skill_id2
    where CSparty.CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();
    $CS2 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $CS2;
}

function CS3($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select CSdetail.CSparty_id, t3.trainer_id as ti3, t3.trainer_name as t3, s3.sync_name as s3, t3.EX_flg, lucky_skills.lucky_skill_name, t3.potential, CSdetail.PoMaTool_URL3 from CSdetail
    left join CSparty on CSparty.CSparty_id = CSdetail.CSparty_id
    left join trainer as t3 on t3.trainer_id = CSdetail.trainer_id3
    left join sync as s3 on s3.sync_id = t3.sync_id
    left join lucky_skills on lucky_skills.lucky_skill_id = CSdetail.lucky_skill_id3
    where CSparty.CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();
    $CS3 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $CS3;
}

function deleteDetail($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("delete from LGdetail where LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function deleteLGparty($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("delete from LGparty where LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function delete_LG($eventnumber)
{
    $pdo = get_connection();
    $st = $pdo->prepare("delete from LGparty where eventnumber = ?");
    $st->bindValue(1, $eventnumber);
    $st->execute();

    $pdo = null;
    $st = null;
}

function add_sync($sync)
{
    $pdo = get_connection();
    $st = $pdo->prepare("insert into partydetails(party_id, enemy_id, trainer_id1, trainer_id2, trainer_id3,
    lucky_skill_id1, lucky_skill_id2, lucky_skill_id3,
    PoMaTool_URL1, PoMaTool_URL2, PoMaTool_URL3) values(:party_id, :enemy_id, :trainer_id1, :trainer_id2, trainer_id3
    :lucky_skill_id1, :lucky_skill_id2, :lucky_skill3, :PoMaTool_URL1, :PoMaTool_URL2, :PoMaTool_URL3)");
    $st->bindValue(':party_id', $sync['party_id']);
    $st->bindValue(':enemy_id', $sync['enemy_id']);
    $st->bindValue(':trainer_id1', $sync['trainer_id1']);
    $st->bindValue(':trainer_id2', $sync['trainer_id2']);
    $st->bindValue(':trainer_id3', $sync['trainer_id3']);
    $st->bindValue(':lucky_skill_id1', $sync['lucky_skill_id1']);
    $st->bindValue(':lucky_skill_id2', $sync['lucky_skill_id2']);
    $st->bindValue(':lucky_skill_id3', $sync['lucky_skill_id3']);
    $st->bindValue(':PoMaTool_URL1', $sync['PoMaTool_URL1']);
    $st->bindValue(':PoMaTool_URL2', $sync['PoMaTool_URL2']);
    $st->bindValue(':PoMaTool_URL3', $sync['PoMaTool_URL3']);
    $st->execute();

    $pdo = null;
    $st = null;
}

function add_LG($LG)
{
    $pdo = get_connection();
    $st = $pdo->prepare("insert into LGparty (name, eventnumber, enemy_id1, enemy_id2, enemy_id3, category_id) values
    (:name, :eventnumber, :enemy_id1, :enemy_id2, :enemy_id3, :category_id)");
    $st->bindValue(':name', $LG['name']);
    $st->bindValue(':eventnumber', $LG['eventnumber']);
    $st->bindValue(':enemy_id1', $LG['enemy_id1']);
    $st->bindValue(':enemy_id2', $LG['enemy_id2']);
    $st->bindValue(':enemy_id3', $LG['enemy_id3']);
    $st->bindValue(':category_id', $LG['category_id']);
    $st->execute();

    $pdo = null;
    $st = null;
}
