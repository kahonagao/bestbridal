jQuery(function(){$('.form_number').change(function(){var data=$(this).val();var hankaku=data.replace(/[Ａ-Ｚａ-ｚ０-９ー]|\－|\＋/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});var zenkakuDel=new String(hankaku).match(/\d|\-|\+/g);zenkakuDel=zenkakuDel.join("");$(this).val(zenkakuDel)});$('.form_mail').change(function(){var zenkigou="＠－ー＋＿．，、";var hankigou="@--+_...";var data=$(this).val();var str="";for(i=0;i<data.length;i++){var dataChar=data.charAt(i);var dataNum=zenkigou.indexOf(dataChar,0);if(dataNum>=0)dataChar=hankigou.charAt(dataNum);str+=dataChar}var hankaku=str.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});$(this).val(hankaku)})});$(function(){$("#clearForm").bind("click",function(){$(this.form).find("textarea,:text,select").val("").end().find(":checked").prop("checked",false)})});