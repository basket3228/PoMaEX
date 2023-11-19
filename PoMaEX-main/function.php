<?php

define('DOMAIN', 'http://' . $_SERVER['HTTP_HOST'] . "/");
define('LG', 'レジェンドアドベンチャー');
define('SA', 'スコアアタック');
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
    header('location' . DOMAIN . 'HTML/index.php');
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

function get_particular_enemy($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select enemy_id, enemy_name from enemy where enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetch();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_enemy1($LG_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select LG.enemy_id1, e1.enemy_name as e1, LG.LG_id from LG
    left join enemy as e1 on e1.enemy_id = LG.enemy_id1
    where LG_id = ?");
    $st->bindValue(1, $LG_id);
    $st->execute();
    $enemy = $st->fetch();

    $pdo = null;
    $st = null;

    return $enemy;
}

function get_enemy2($LG_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select LG.enemy_id2, e2.enemy_name as e2, LG.eventnumber from LG
    left join enemy as e2 on e2.enemy_id = LG.enemy_id2
    where LG_id = ?");
    $st->bindValue(1, $LG_id);
    $st->execute();
    $enemy = $st->fetch();

    $pdo = null;
    $st = null;

    return $enemy;
}

function get_enemy3($LG_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select LG.enemy_id3, e3.enemy_name as e3, LG.eventnumber from LG
    left join enemy as e3 on e3.enemy_id = LG.enemy_id3
    where LG_id = ?");
    $st->bindValue(1, $LG_id);
    $st->execute();
    $enemy = $st->fetch();

    $pdo = null;
    $st = null;

    return $enemy;
}

function get_entei($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloEntei as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_raiko($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloRaiko as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_latios($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloLatios as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_latias($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloLatias as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_terrakion($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloTerrakion as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_cobalion($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloCobalion as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_cresselia($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloCresselia as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_tornadus($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloTornadus as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_tapu_Bulu($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloTapu_Bulu as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_azelf($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloAzelf as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_uxie($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloUxie as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_regirock($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloRegirock as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_moltres($enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select t1.enemy_id, enemy_name,trainer.trainer_name, sync.sync_name, type.type_name from soloMoltres as t1
    left join enemy on enemy.enemy_id = t1.enemy_id
    left join trainer on trainer.trainer_id = t1.trainer_id
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    where t1.enemy_id = ?");
    $st->bindValue(1, $enemy_id);
    $st->execute();
    $enemy = $st->fetchAll();

    $pdo = null;
    $st = null;
    return $enemy;
}

function get_luckyskill()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select luckyskill_id, luckyskill_name from luckyskill");
    $st->execute();
    $lucky_skill = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $lucky_skill;
}

function get_party($LG_id, $enemy_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct LGparty.LGparty_id, t1.trainer_name as t1, t2.trainer_name as t2, t3.trainer_name as t3, LGparty.enemy_id, enemy.enemy_name from LG
    left join LGparty on LGparty.LG_id = LG.LG_id
    left join enemy on enemy.enemy_id = LGparty.enemy_id
    left join trainer as t1 on t1.trainer_id = LGparty.trainer_id1
    left join trainer as t2 on t2.trainer_id = LGparty.trainer_id2
    left join trainer as t3 on t3.trainer_id = LGparty.trainer_id3
    where LG.LG_id = ?
    and LGparty.enemy_id = ?");
    $st->bindValue(1, $LG_id);
    $st->bindValue(2, $enemy_id);
    $st->execute();
    $party = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $party;
}

function get_LGParty($LG_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct LGparty.LGparty_id, trainer.trainer_name, enemy_id from LG
    left join LGparty on LGparty.LG_id = LG.LG_id
    left join trainer on trainer.trainer_id = LGparty.trainer_id2
    where LG.LG_id = ?");
    $st->bindValue(1, $LG_id);
    $st->execute();
    $party = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $party;
}

function get_SAParty($SA_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct SAparty.SAparty_id, trainer.trainer_name from SA
    left join SAparty on SAparty.SA_id = SA.SA_id
    left join trainer on trainer.trainer_id = SAparty.trainer_id2
    where SA.SA_id = ?");
    $st->bindValue(1, $SA_id);
    $st->execute();
    $party = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $party;
}

function get_CSList($type_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select CSparty.CSparty_id, trainer.trainer_name, CSparty.type_id, type_name from CSparty
    left join type on type.type_id = CSparty.type_id
    left join trainer on trainer.trainer_id = CSparty.trainer_id2
    where CSparty.type_id = ?");
    $st->bindValue(1, $type_id);
    $st->execute();
    $CSparty = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $CSparty;
}

function get_SAList($SA_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select SAparty.SAparty_id, t1.trainer_name as t1, t2.trainer_name as t2, t3.trainer_name as t3 from SAparty
    left join trainer as t1 on t1.trainer_id = SAparty.trainer_id1
    left join trainer as t2 on t2.trainer_id = SAparty.trainer_id2
    left join trainer as t3 on t3.trainer_id = SAparty.trainer_id3
    where SAparty.SA_id = ?");
    $st->bindValue(1, $SA_id);
    $st->execute();
    $SAparty = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $SAparty;
}

function get_LGpartyList()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct LG_id, name, eventnumber from LG");
    $st->execute();
    $partyList = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $partyList;
}

function get_SApartyList()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select distinct SA_id, name from SA");
    $st->execute();
    $partyList = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $partyList;
}

function get_LGURL($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select LGparty_id, URL from LGparty where LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();
    $URL = $st->fetch();

    $pdo = null;
    $st = null;

    return $URL;
}

function get_CSURL($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select CSparty_id, URL from CSparty where CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();
    $URL = $st->fetch();

    $pdo = null;
    $st = null;

    return $URL;
}

function get_SAURL($SAparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select SAparty_id, URL from SAparty where SAparty_id = ?");
    $st->bindValue(1, $SAparty_id);
    $st->execute();
    $URL = $st->fetch();

    $pdo = null;
    $st = null;

    return $URL;
}

function get_LGmemo($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select LGparty_id, memo from LGparty where LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();
    $memo = $st->fetch();

    $pdo = null;
    $st = null;

    return $memo;
}

function get_CSmemo($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select CSparty_id, memo from CSparty where CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();
    $memo = $st->fetch();

    $pdo = null;
    $st = null;

    return $memo;
}

function get_SAmemo($SAparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select SAparty_id, memo from SAparty where SAparty_id = ?");
    $st->bindValue(1, $SAparty_id);
    $st->execute();
    $memo = $st->fetch();

    $pdo = null;
    $st = null;

    return $memo;
}

function get_category()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select category_id, category_name from category");
    $st->execute();
    $category = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $category;
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
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where URL is not null");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function get_trainerByType($type_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join role on role.role_id = trainer.role_id where URL is not null and sync.type_id = ?");
    $st->bindValue(1, $type_id);
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function get_trainerByRole($role_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join role on role.role_id = trainer.role_id where URL is not null and trainer.role_id = ?");
    $st->bindValue(1, $role_id);
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function get_mainTrainer()
{
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join role on role.role_id = trainer.role_id where trainer_name == '主人公'");
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
    $st = $pdo->prepare("select LGparty.LGparty_id, LGparty.LG_id, t1.trainer_id as ti1, t1.trainer_name as t1, t1.stars as star1, s1.sync_name as s1, type.type_name as tn1, t1.EX_Flg, luckyskill.luckyskill_name, t1.potential from LGparty
    left join trainer as t1 on t1.trainer_id = LGparty.trainer_id1
    left join sync as s1 on s1.sync_id = t1.sync_id
    left join type on type.type_id = s1.type_id
    left join luckyskill on luckyskill.luckyskill_id = LGparty.luckyskill_id1
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
    $st = $pdo->prepare("select LGparty.LGparty_id, LGparty.LG_id, t2.trainer_id as ti2, t2.trainer_name as t2, t2.stars as star2, s2.sync_name as s2, type.type_name as tn2, t2.EX_Flg, luckyskill.luckyskill_name, t2.potential from LGparty
    left join trainer as t2 on t2.trainer_id = LGparty.trainer_id2
    left join sync as s2 on s2.sync_id = t2.sync_id
    left join type on type.type_id = s2.type_id
    left join luckyskill on luckyskill.luckyskill_id = LGparty.luckyskill_id2
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
    $st = $pdo->prepare("select LGparty.LGparty_id, LGparty.LG_id, t3.trainer_id as ti3, t3.trainer_name as t3, t3.stars as star3, s3.sync_name as s3, type.type_name as tn3, t3.EX_Flg, luckyskill.luckyskill_name, t3.potential from LGparty
    left join trainer as t3 on t3.trainer_id = LGparty.trainer_id3
    left join sync as s3 on s3.sync_id = t3.sync_id
    left join type on type.type_id = s3.type_id
    left join luckyskill on luckyskill.luckyskill_id = LGparty.luckyskill_id3
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
    $st = $pdo->prepare("select CSparty.CSparty_id, t1.trainer_id as ti1, t1.trainer_name as t1, t1.stars as star1, s1.sync_name as s1, type.type_name as tn1, t1.EX_Flg, luckyskill.luckyskill_name, t1.potential from CSparty
    left join trainer as t1 on t1.trainer_id = CSparty.trainer_id1
    left join sync as s1 on s1.sync_id = t1.sync_id
    left join type on type.type_id = s1.type_id
    left join luckyskill on luckyskill.luckyskill_id = CSparty.luckyskill_id1
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
    $st = $pdo->prepare("select CSparty.CSparty_id, t2.trainer_id as ti2, t2.trainer_name as t2, t2.stars as star2, s2.sync_name as s2, type.type_name as tn2, t2.EX_Flg, luckyskill.luckyskill_name, t2.potential from CSparty
    left join trainer as t2 on t2.trainer_id = CSparty.trainer_id2
    left join sync as s2 on s2.sync_id = t2.sync_id
    left join type on type.type_id = s2.type_id
    left join luckyskill on luckyskill.luckyskill_id = CSparty.luckyskill_id2
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
    $st = $pdo->prepare("select CSparty.CSparty_id, t3.trainer_id as ti3, t3.trainer_name as t3, t3.stars as star3, s3.sync_name as s3, type.type_name as tn3, t3.EX_Flg, luckyskill.luckyskill_name, t3.potential from CSparty
    left join trainer as t3 on t3.trainer_id = CSparty.trainer_id3
    left join sync as s3 on s3.sync_id = t3.sync_id
    left join type on type.type_id = s3.type_id
    left join luckyskill on luckyskill.luckyskill_id = CSparty.luckyskill_id3
    where CSparty.CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();
    $CS3 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $CS3;
}

function SA1($SAparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select SAparty.SAparty_id, t1.trainer_id as ti1, t1.trainer_name as t1, t1.stars as star1, s1.sync_name as s1, type.type_name as tn1, t1.EX_Flg, luckyskill.luckyskill_name, t1.potential from SAparty
    left join trainer as t1 on t1.trainer_id = SAparty.trainer_id1
    left join sync as s1 on s1.sync_id = t1.sync_id
    left join type on type.type_id = s1.type_id
    left join luckyskill on luckyskill.luckyskill_id = SAparty.luckyskill_id1
    where SAparty.SAparty_id = ?");
    $st->bindValue(1, $SAparty_id);
    $st->execute();
    $SA1 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $SA1;
}

function SA2($SAparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select SAparty.SAparty_id, SAparty.SA_id, t2.trainer_id as ti2, t2.trainer_name as t2, t2.stars as star2, s2.sync_name as s2, type.type_name as tn2, t2.EX_Flg, luckyskill.luckyskill_name, t2.potential from SAparty
    left join trainer as t2 on t2.trainer_id = SAparty.trainer_id2
    left join sync as s2 on s2.sync_id = t2.sync_id
    left join type on type.type_id = s2.type_id
    left join luckyskill on luckyskill.luckyskill_id = SAparty.luckyskill_id2
    where SAparty.SAparty_id = ?");
    $st->bindValue(1, $SAparty_id);
    $st->execute();
    $SA2 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $SA2;
}

function SA3($SAparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("select SAparty.SAparty_id, t3.trainer_id as ti3, t3.trainer_name as t3, t3.stars as star3, s3.sync_name as s3, type.type_name as tn3, t3.EX_Flg, luckyskill.luckyskill_name, t3.potential from SAparty
    left join trainer as t3 on t3.trainer_id = SAparty.trainer_id3
    left join sync as s3 on s3.sync_id = t3.sync_id
    left join type on type.type_id = s3.type_id
    left join luckyskill on luckyskill.luckyskill_id = SAparty.luckyskill_id3
    where SAparty.SAparty_id = ?");
    $st->bindValue(1, $SAparty_id);
    $st->execute();
    $SA3 = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $SA3;
}

function deleteLGDetail1($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update LGparty set trainer_id1 = null where LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function deleteLGDetail2($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update LGparty set trainer_id2 = null where LGparty_id = ?");
    $st->bindValue(1, $LGparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function deleteLGDetail3($LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update LGparty set trainer_id3 = null where LGparty_id = ?");
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

function deleteCSDetail1($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update CSparty set trainer_id1 = null where CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function deleteCSDetail2($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update CSparty set trainer_id2 = null where CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function deleteCSDetail3($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update CSparty set trainer_id3 = null where CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function deleteCSparty($CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("delete from CSparty where CSparty_id = ?");
    $st->bindValue(1, $CSparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function delete_LG($eventnumber)
{
    $pdo = get_connection();
    $st = $pdo->prepare("delete from LG where eventnumber = ?");
    $st->bindValue(1, $eventnumber);
    $st->execute();

    $pdo = null;
    $st = null;
}

function add_sync($sync)
{
    $pdo = get_connection();
    $st = $pdo->prepare("insert into partydetails(party_id, enemy_id, trainer_id1, trainer_id2, trainer_id3,
    lucky_skill_id1, lucky_skill_id2, lucky_skill_id3, URL) values(:party_id, :enemy_id, :trainer_id1, :trainer_id2, trainer_id3
    :lucky_skill_id1, :lucky_skill_id2, :lucky_skill3, :URL)");
    $st->bindValue(':party_id', $sync['party_id']);
    $st->bindValue(':enemy_id', $sync['enemy_id']);
    $st->bindValue(':trainer_id1', $sync['trainer_id1']);
    $st->bindValue(':trainer_id2', $sync['trainer_id2']);
    $st->bindValue(':trainer_id3', $sync['trainer_id3']);
    $st->bindValue(':lucky_skill_id1', $sync['lucky_skill_id1']);
    $st->bindValue(':lucky_skill_id2', $sync['lucky_skill_id2']);
    $st->bindValue(':lucky_skill_id3', $sync['lucky_skill_id3']);
    $st->bindValue(':PoMaTool_URL', $sync['URL']);
    $st->execute();

    $pdo = null;
    $st = null;
}

function add_LG($LG)
{
    $pdo = get_connection();
    $st = $pdo->prepare("insert into LG (name, eventnumber, enemy_id1, enemy_id2, enemy_id3) values
    (:name, :eventnumber, :enemy_id1, :enemy_id2, :enemy_id3)");
    $st->bindValue(':name', $LG['name']);
    $st->bindValue(':eventnumber', $LG['eventnumber']);
    $st->bindValue(':enemy_id1', $LG['enemy_id1']);
    $st->bindValue(':enemy_id2', $LG['enemy_id2']);
    $st->bindValue(':enemy_id3', $LG['enemy_id3']);
    $st->execute();

    $pdo = null;
    $st = null;
}

function add_LGparty($party)
{
    $pdo = get_connection();
    $st = $pdo->prepare("insert into LGparty (LG_id, LGparty.enemy_id, trainer_id1, trainer_id2, trainer_id3, luckyskill_id1, luckyskill_id2, luckyskill_id3, URL) values
    (:LG_id, :enemy_id, :trainer_id1, :trainer_id2, :trainer_id3, :luckyskill_id1, :luckyskill_id2, :luckyskill_id3, :URL)");
    $st->bindValue(':LG_id', $party['LG_id']);
    $st->bindValue(':enemy_id', $party['enemy_id']);
    $st->bindValue(':trainer_id1', $party['trainer_id1']);
    $st->bindValue(':trainer_id2', $party['trainer_id2']);
    $st->bindValue(':trainer_id3', $party['trainer_id3']);
    $st->bindValue(':luckyskill_id1', $party['luckyskill_id1']);
    $st->bindValue(':luckyskill_id2', $party['luckyskill_id2']);
    $st->bindValue(':luckyskill_id3', $party['luckyskill_id3']);
    $st->bindValue(':URL', $party['URL']);
    $st->execute();

    $pdo = null;
    $st = null;
}

function add_CS_grids($URL, $CSparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update CSparty set URL = ? where CSparty_id = ?");
    $st->bindValue(1, $URL);
    $st->bindValue(2, $CSparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function add_LG_grids($URL, $LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update LGparty set URL = ? where LGparty_id = ?");
    $st->bindValue(1, $URL);
    $st->bindValue(2, $LGparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function add_SA_grids($URL, $SAparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update SAparty set URL = ? where SAparty_id = ?");
    $st->bindValue(1, $URL);
    $st->bindValue(2, $SAparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function update_party1($trainer_id1, $LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update LGparty set trainer_id1 = ? where LGparty_id = ?");
    $st->bindValue(1, $trainer_id1);
    $st->bindValue(2, $LGparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function update_party2($trainer_id2, $LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update LGparty set trainer_id2 = ? where LGparty_id = ?");
    $st->bindValue(1, $trainer_id2);
    $st->bindValue(2, $LGparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function update_party3($trainer_id3, $LGparty_id)
{
    $pdo = get_connection();
    $st = $pdo->prepare("update LGparty set trainer_id3 = ? where LGparty_id = ?");
    $st->bindValue(1, $trainer_id3);
    $st->bindValue(2, $LGparty_id);
    $st->execute();

    $pdo = null;
    $st = null;
}

function sort_by_trainer_name1()
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where URL is not null
    order by trainer_name asc");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function sort_by_trainer_name2()
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where URL is not null
    order by trainer_name desc");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function sort_by_sync_name1()
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where URL is not null
    order by sync_name asc");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function sort_by_sync_name2()
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where URL is not null
    order by sync_name desc");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function sort_by_type1()
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where URL is not null
    order by type_id asc");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function sort_by_type2()
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where URL is not null
    order by type_id desc");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function filter_by_type_name($type_id)
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where type_id = ?");
    $st->bindValue(1, $type_id);
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function filter_by_stars($stars)
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where stars = ?");
    $st->bindValue(1, $stars);
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function filter_by_role($role_id)
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where role_id = ?");
    $st->bindValue(1, $role_id);
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function filter_by_EX_flg()
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where EX_flg = true");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}

function filter_by_EX_flg()
    {
    $pdo = get_connection();
    $st = $pdo->prepare("select trainer_id, trainer_name, sync.sync_name, sync.type_id, role.role_name, EX_flg, potential, stars, type.type_name, URL from trainer
    left join sync on sync.sync_id = trainer.sync_id
    left join type on type.type_id = sync.type_id
    left join role on role.role_id = trainer.role_id where EX_flg = false");
    $st->execute();
    $trainer = $st->fetchAll();

    $pdo = null;
    $st = null;

    return $trainer;
}


