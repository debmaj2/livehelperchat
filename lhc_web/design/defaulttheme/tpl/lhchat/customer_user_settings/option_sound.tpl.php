<a href="#" class="dropdown-item text-dark" data-sound-enabled="<?php $soundMessageEnabled == 0 ? print 'false' : print 'true'?>" onclick="return lhinst.disableChatSoundUser($(this))" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/user_settings','Enable/Disable sound about new messages from the operator');?>"><i class="material-icons"><?php $soundMessageEnabled == 0 ? print '&#xf581;' : print '&#xf57e;'?></i></a>