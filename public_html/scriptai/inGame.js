let npc_id=1;
$(document).ready(function(){
    $("#close").click(function(){
        $("#invo").hide();
    });
    $("#open").click(function(){
        $.get('/inventory.php', function(data) {
            $('#invo').html(data);
            $("#invo").show();
        });
    });
    upd_npc();
});
function upd_npc() {
    $.get('/battle.php?action=upd_npc', function(data) {
        $('#firstEnemyId').val(data[0]['id']);
        $('#firstEnemyName').html(data[0]['name']);
        $('#firstEnemyConst').html(data[0]['constitution']);

        $('#secEnemyId').val(data[1]['id']);
        $('#secEnemyName').html(data[1]['name']);
        $('#secEnemyConst').html(data[1]['constitution']);
    }, 'json');
}
function select_npc(nr) {
    let inp_name='#'+nr+'EnemyId';
    npc_id=$(inp_name).val();
}
function attck(type) {
    $.get('/battle.php?action='+type, {'npc_id': npc_id}, function(data) {
        upd_npc();
    });
}