<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","head"); ?>
<body class="gray-bg">
<?php if($set_iframe==0) { ?>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","iframetop"); ?>
<?php } else { ?>
<div style="padding-top: 15px;"></div>
<?php } ?>
<div class="container-fluid  ie8-member">
    <div class="row row-40" >
        <?php if($set_iframe==0) { ?>
        <div class="col-sm-3 left-nav">             <!--左侧导航-->
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="nav-close"><i class="fa fa-times-circle"></i>
                </div>
                <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;">
                    <div class="sidebar-collapse" style="width: auto; height: 100%;">
                        <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","left"); ?>
                    </div>
                </div>
            </nav>
            <!--end 左侧导航-->
        </div><!--col-sm-3--><?php } ?>

        <div class="<?php if($set_iframe==0) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } ?> paddingleft0">

            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>修改邮箱</h5>
                        </div>
                        <div class="ibox-content" style="min-height: 500px;">
                            <div class="row">
                                <form class="form-horizontal" role="form" name="passworform" action="?m=member&f=index&v=edit_email&set_iframe=<?php echo $set_iframe;?>" method="post" id="passworform" onsubmit="return check_password();">
                                    <table class="table-dashed table-advance table-hover ">
                                        <tbody>
                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right">邮箱：</label><div class="col-sm-3 text-left"><input type="text" class="form-control" id="email" placeholder="请输入邮箱" name="email" type="text" value="<?php if(strpos($memberinfo['email'],'@h1jk.cn')===false) { ?><?php echo $memberinfo['email'];?><?php } ?>"></div></div></td>
                                        </tr>


                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right"> </label><div class="col-sm-3 text-left"><button type="submit" name="submit" class="btn btn-primary">点击验证</button></div></div></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>