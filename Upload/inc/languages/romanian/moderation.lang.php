<?php
/**
 * MyBB 1.8 Romanian Language Pack
 * Copyright 2023 mgXzyy; All Rights Reserved
 * 
 * $Id: moderation.lang.php 5629 2011-12-24 mgXzyy $
 */

$l['nav_deletethread'] = "Șterge Subiectul";
$l['nav_deletepoll'] = "Șterge Chestionarul";
$l['nav_deleteposts'] = "Șterge Selectiv Răspunsuri";
$l['nav_mergeposts'] = "Unește Selectiv Răspunsuri";
$l['nav_move'] = "Mută sau Copiază Subiectul";
$l['nav_threadnotes'] = "Note Subiect și Jurnalul de Moderare";
$l['nav_getip'] = "Vizualizează Adresa IP a mesajului";
$l['nav_merge'] = "Unește Subiectul";
$l['nav_split'] = "Desparte Subiectul";
$l['nav_multi_deletethreads'] = "Șterge Subiectul Curent";
$l['nav_multi_deleteposts'] = "Șterge Răspunsul Curent";
$l['nav_multi_splitposts'] = "Desparte Răspunsurile Selectate";
$l['nav_multi_mergeposts'] = "Unește Răspunsurile Selectate";
$l['nav_multi_movethreads'] = "Mută Subiectele";

$l['no_mod_options'] = "Nicio acțiune de moderare nu a fost aplicată pe acest subiect de discuție.";
$l['no_delayed_mods'] = "Nu există nicio acțiune de moderare planificată programată pentru acest(e) subiect(e).";
$l['delete_poll'] = "Șterge Chestionarul";
$l['delete_posts'] = "Șterge Răspunsurile";
$l['delete_selected_posts'] = "Șterge Răspunsurile Selectate";
$l['posted_by'] = "Publicat de";
$l['delete_thread'] = "Șterge Subiectul";
$l['get_post_ip'] = "Obține Adresa IP a Mesajului";
$l['info_on_ip'] = "Informații despre această Adresă IP";
$l['ip_address'] = "Adresă IP:";
$l['hostname'] = "Nume Gazdă/ISP:";
$l['if_resolvable'] = "(dacă se poate găsi)";
$l['mod_options'] = "Opțiuni Moderare:";
$l['search_ip_users'] = "Caută utilizatori cu această adresă IP";
$l['search_ip_posts'] = "Caută mesaje trimise de pe această adresă IP";
$l['merge_threads'] = "Unește Subiectele";
$l['new_subject'] = "Subiect Nou:";
$l['thread_to_merge_with'] = "Subiectul cu care să fie unit:";
$l['merge_with_note'] = "Copiază adresa URL a subiectului pe care dorești să îl unești cu acesta în caseta de text din partea dreaptă. <br /> Subiectul de discuție din casetă va fi șters iar toate mesajele din acesta vor fi adăugate la subiectul curent.";
$l['merge_posts'] = "Unește Răspunsurile";
$l['merge_posts_note'] ="Toate răspunsurile selectate vor fi adăugate în primul mesaj selectat.";
$l['move_copy_thread'] = " Mută / Copiază Subiectul";
$l['new_forum'] = "Forum nou:";
$l['method'] = "Metodă";
$l['method_move'] = "Mută subiectul";
$l['method_move_redirect'] = "Mută subiectul și lasă o adresă de redirecționare în forumul inițial pentru câteva zile:";
$l['redirect_expire_note'] = "(lasă câmpul gol pentru termen nelimitat)";
$l['method_copy'] = "Copiază subiectul în noul forum";
$l['split_thread_subject'] = "[Despărțit]";
$l['split_thread'] = "Desparte Subiectul";
$l['new_thread_info'] = "Informații despre noul subiect";
$l['posts_to_split'] = "Răspunsuri care să fie preluate";
$l['thread_notes_editor'] = "Carnet de Notițe pentru acest subiect";
$l['below_notes'] = "Mai jost poți modifica notițele pentru acest subiect.";
$l['update_notes'] = "Actualiează Notițele";
$l['mod_logs'] = "Jurnalul acțiunilor de Moderare (ultimele 20 de acțiuni afișate)";
$l['mod_username'] = "Nume utilizator";
$l['mod_date'] = "Data";
$l['mod_actions'] = "Acțiune";
$l['mod_information'] = "Detalii";
$l['read'] = "Citit:";
$l['thread'] = "Subiect:";
$l['post'] = "Mesaj:";
$l['forum'] = "Forum:";
$l['delete_threads'] = "Ștergere Subiecte";
$l['confirm_delete_threads'] = "Ești sigur că dorești ștergerea subiectelor de discuție selectate? Odată șters, orice informație conținută într-un subiect de discuție cum ar fi răspunsurile, chestionarul sau fișierele atașate vor fi, de asemenea, iremediabil pierdute.";
$l['move_threads'] = "Mutearea Subiectelor";
$l['confirm_delete_posts'] = "Ești sigur că dorești să ștergi răspunsurile selectate din acest subiect de discuție? Odată șterse, acestea nu mai pot fi recuperate. De asemenea, dacă nu mai rămân răspunsuri în subiectul curent, acesta va fi șters.";
$l['post_separator'] = "Delimitator de Răspunsuri";
$l['new_line'] = "Linie nouă";
$l['horizontal_rule'] = "Bordură orizontală";
$l['resolve_fail'] = "N/A (imposibil de obținut)";

$l['opened'] = "Deschis";
$l['closed'] = "Închis";
$l['stuck'] = "însemnat ca Important";
$l['unstuck'] = "demarcat ca Important";
$l['mod_process'] = "Subiectul {1}";
$l['redirects_removed'] = "Adresele de redirecționare ale subiectului au fost înlăturate.";
$l['thread_deleted'] = "Subiect Șters: {1}";
$l['poll_deleted'] = "Chestionar Șters: {1}";
$l['thread_approved'] = "Subiect Aprobat: {1}";
$l['thread_unapproved'] = "Subiect Dezaprobat: {1}";
$l['deleted_selective_posts'] = "Răspunsurile selective șterse ({1})";
$l['merged_selective_posts'] = "Răspunsurile Selective au fost Unite";
$l['split_selective_posts'] = "Răspunsurile extrase din subiectul (PIDs: {1}) au fost adaugate la subiectul (TID: {2})";
$l['removed_subscriptions'] = "Toate abonările au fost anulate";
$l['thread_moved'] = "Subiect Mutat";
$l['thread_copied'] = "Subiect Copiat";
$l['thread_merged'] = "Subiecte Unite";
$l['thread_split'] = "Subiect Despărțit";
$l['thread_notes_edited'] = "Notițele Subiectului modificate";
$l['multi_deleted_threads'] = "Subiecte Șterse";
$l['multi_opened_threads'] = "Subiecte Deschise";
$l['multi_closed_threads'] = "Subiecte Închise";
$l['multi_approved_threads'] = "Subiecte Aprobate";
$l['multi_unapproved_threads'] = "Subiecte Dezaprobate";
$l['multi_approve_posts'] = "Răspunsurile selectate au fost Aprobate";
$l['multi_unapprove_posts'] = "Răspunsurile selectate au fost Dezaprobate";
$l['multi_stuck_threads'] = "Subiecte însemnate ca fiind Importante";
$l['multi_unstuck_threads'] = "Subiecte demarcate ca fiind Importante";
$l['multi_moved_threads'] = "Subiecte Mutate";
$l['multi_copied_threads'] = "Subiecte copiate";
$l['custom_tool'] = "Opțiune Moderare Personalizată: {1}";

$l['delayed_moderation'] = "Moderare Planificată";
$l['delayed_moderation_desc'] = "Aici poți programa o acțiune de moderare cu câteva zile în avans.";
$l['threads'] = "Subiecte incluse:";
$l['threads_selected'] = "{1} subiect(e) selectat(e)";
$l['delay_moderation_for'] = "Moderarea va avea loc peste:";
$l['days'] = "zi(le)";
$l['moderation_action'] = "Acțiunea de Moderare:";
$l['open_close_thread'] = "Deschide/Închide Subiect";
$l['remove_redirects'] = "Înlătură Redirecționările";
$l['remove_subscriptions'] = "Anulează Abonările";
$l['approve_unapprove_thread'] = "Aprobă/Dezaprobă Subiect";
$l['stick_unstick_thread'] = "Subiect Important/Normal";
$l['save_delayed_moderation'] = "Salvare";
$l['custom'] = "personalizat";
$l['delayed_mod_queue'] = "Lista Acțiunilor de Moderare Planificată";
$l['days_to_perform_action'] = "Zile rămase până la acțiune";
$l['leave_redirect'] = "Lasă redirecționare:";
$l['multiple_threads'] = "Subiecte Multiple";
$l['actions'] = "Acțiuni";
$l['cancel'] = "Anulare";
$l['leave_redirect_for'] = "Lasă redirecționare pentru:";
$l['redirect_forever'] = "Totdeauna";

$l['error_nomergeposts'] = "Trebuie să selectezi cel puțin un alt răspuns pe care să îl unești cu acesta.";
$l['error_cantsplitonepost'] = "Nu poți despărți un subiect care conține doar un mesaj.";
$l['error_badmergeurl'] = "Adresa specificată pentru subiectul de unire pare să fie eronată sau să lipsească. Te rugăm să copiezi adresa exactă în casetă apoi să reîncerci.";
$l['error_inline_nothreadsselected'] = "Ne pare rău, însă nu ai selectat niciun subiect de discuție pentru moderare sau sesiunea ta de lucru a expirat (aceasta expiră automat după o oră de inactivitate). Te rugăm să refaci selecția și să încerci din nou.";
$l['error_inline_nopostsselected'] = "Ne pare rău, însă nu ai selectat niciun răspuns pentru moderare sau sesiunea ta de lucru a expirat (aceasta expiră automat după o oră de inactivitate). Te rugăm să refaci selecția și să încerci din nou.";
$l['error_movetocategory'] = "Această opțiune încearcă să mute subiectul de discuție într-o categorie. Te rugăm să ajustezi această facilitate încât mutarea să fie făcută într-un forum valid.";
$l['error_cantsplitall'] = "Nu poți extrage toate răspunsurile din acest subiect! Dacă faci acest lucru, ce mai rămâne în urmă?";
$l['error_nosplitposts'] = "Nu poți despărți răspunsuri de acest subiect întrucât nu ai selectat niciunul.";
$l['error_movetosameforum'] = "Nu poți muta acest subiect în exact același forum. Te rugăm să alegi o altă destinație.";
$l['error_mergewithself'] = "Subiectele nu pot fi unite cu ele însele.<br /> Te rugăm să adaugi o adresă validă.";
$l['error_delayedmoderation_unsupported_type'] = "Ne pare rău, însă nu ai ales un tip de acțiune validă.";
$l['error_delayedmoderation_unsupported_method'] = "Ne pare rău, însă nu ai ales o metodă validă.";
$l['error_delayedmoderation_invalid_delay'] = "Ne pare rău, însă nu ai ales un interval de timp rezonabil.";

$l['redirect_pollnotdeleted'] = "Chestionarul nu a fost înlăturat pentru că nu ai bifat căsuța \"Șterge\".<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_polldeleted'] = "Chestionarul a fost înlăturat din subiect.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_mergeposts'] = "Răspunsurile selectate au fost unite.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_openthread'] = "Subiectul de discuție a fost deschis.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_closethread'] = "Subiectul de dicuție a fost închis.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_stickthread']  = "Subiectul de discuție a fost însemnat ca fiind Important.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_unstickthread'] = "Subiectul de discuție a fost demarcat ca fiind Important.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_threaddeleted'] = "Subiectul de discuție a fost șters. <br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_threadmoved'] = "Subiectul a fost mutat în forumul ales.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_redirectsremoved'] = "Toate redirecționările către noua locație a acestui subiect au fost înlăturate.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_threadapproved'] = "Subiectul a fost aprobat.";
$l['redirect_threadunapproved'] = "Subiectul a fost dezaprobat.";
$l['redirect_threadsplit'] = "Subiectul a fost despărțit cu succes.<br /> Vei fi redirecționat către noul subiect.";
$l['redirect_threadnotesupdated'] = "Notițele pentru acest subiect au fost actualizate/ <br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_threadsmerged'] = "Subiectele de discuție alese au fost unite.<br /> Vei fi redirecționat către noul subiect.";
$l['redirect_inline_threadsdeleted'] = "Subiectele de discuție selectate au fost șterse.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_threadsopened'] = "Subiectele de discuție selectate au fost deschise.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_threadsclosed'] = "Subiectele de discuție selectate au fost închise.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_threadsstuck'] = "Subiectele de discuție selectate au fost însemnate ca fiind Importante.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_threadsunstuck'] = "Subiectele de discuție selectate au fost demarcate ca fiind Importante.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_threadsmoved'] = "Subiectele de discuție selectate au fost mutate.<br /> Vei fi redirecționat către noua locație.";
$l['redirect_inline_threadsapproved'] = "Subiectele de discuție selectate au fost aprobate.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_threadsunapproved'] = "Subiectele de discuție selectate au fost dezaprobate.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_postsmerged'] = "Răspunsurile selectate au fost unite.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_postsapproved'] = "Răspunsurile selectate au fost aprobate.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_inline_postsunapproved'] = "Răspunsurile selectate au fost dezaprobate.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_postsdeleted'] = "Răspunsurile selectate au fost șterse.<br /> Vei fi redirecționat la locația anterioară.";
$l['redirect_removed_subscriptions'] = "Toate abonările la acest subiect au fost anulate.<br /> Vei fi redirecționat la subiectul de discuție.";
$l['redirect_customtool_thread'] = "Opțiunea de Moderare \"{1}\"a fost executată.<br /> Vei fi redirecționat către subiect.";
$l['redirect_customtool_forum'] = "Opțiunea de Moderare \"{1}\"a fost executată.<br /> Vei fi redirecționat către forum.";
$l['redirect_customtool_search'] = "Opțiunea de Moderare \"{1}\"a fost executată.<br /> Vei fi redirecționat la căutare.";
$l['redirect_delayed_moderation_thread'] = "Moderarea Planificată selectată fost salvată și amânată {1} zi(le).<br /> Vei fi redirecționat către subiect.";
$l['redirect_delayed_moderation_forum'] = "Moderarea Planificată selectată fost salvată și amânată {1} zi(le).<br /> Vei fi redirecționat către forum.";
$l['redirect_delayed_moderation_search'] = "Moderarea Planificată selectată fost salvată și amânată {1} zi(le).<br /> Vei fi redirecționat la căutare.";
$l['redirect_delayed_moderation_cancelled'] = "Moderarea Planificată selectată a fost anulată.<br /> Vei fi redirecționat la lista de acțiuni.";
?>
