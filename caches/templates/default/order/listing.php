<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","head"); ?>
<body class="gray-bg">
<?php if($set_iframe==0) { ?>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","iframetop"); ?>
<?php } else { ?>
<div style="padding-top: 15px;"></div>
<?php } ?>
<div class="container-fluid  ie8-member">
    <div class="row row-40">
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
                    <div class=" ibox">
                    <section class="panel">
                        <header class="panel-heading"><span class="title">积分兑换商品信息</span></header>

                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tabs1" id="1tab" role="tab" data-toggle="tab" aria-controls="tabs1" aria-expanded="true">全部订单</a></li>
                            <li role="presentation" class=""><a href="?m=credit&f=mycredit&v=listing&set_iframe=<?php echo $set_iframe;?>" role="tab" >积分明细</a></li>
                        </ul>
                        </li>
                        </ul>

                        <div id="myTabContent" class="tab-content tabsbordertop">

                            <div role="tabpanel" class="tab-pane fade active in" id="tabs1" aria-labelledby="1tab">
                                <div class="panel-body" id="panel-bodys">

                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                                        <tr>
                                            <th class="tablehead">订单ID</th>
                                            <th class="tablehead">订单信息</th>
                                            <th class="tablehead">下单时间</th>
                                            <th class="tablehead">状态</th>
                                            <th class="tablehead">积分</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $n=1;if(is_array($result)) foreach($result AS $r) { ?>
                                        <tr>
                                            <td class="orderlist"><?php echo $r['orderid'];?></td>
                                            <td class="orderlist"><a href="<?php echo $r['url'];?>" target="_blank"><div class="orderproimg"><img src="<?php echo $r['thumb'];?>" title="<?php echo $r['remark'];?>" style="max-height: 80px;"><span><?php echo strcut($r['remark'],30);?></span></div></a></td>
                                            <td class="orderlist"><?php echo date('Y-m-d H:i',$r['addtime']);?></td>
                                            <td class="orderlist"><?php echo $status[$r['status']];?></td>
                                            <td class="orderlist"><?php echo $r['point'];?></td>
                                        </tr>
                                        <?php $n++;}?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="paginationpage text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <?php echo $pages;?>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                            </div>

                    </section>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo R;?>member/js/jscarousel.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jsCarousel').jsCarousel({ onthumbnailclick: function(src) {
            // 可在这里加入点击图片之后触发的效果
            $("#overlay_pic").attr('src', src);
            $(".overlay").show();
        }, autoscroll: true });

        $(".overlay").click(function(){
            $(this).hide();
        });
    });
</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>