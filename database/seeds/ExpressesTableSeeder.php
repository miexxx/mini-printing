<?php

use Illuminate\Database\Seeder;

class ExpressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = <<<EOF
INSERT INTO `expresses` (`id`, `type`, `company`, `created_at`, `updated_at`) VALUES ('1', 'SF', '顺丰', null, null),
('2', 'HTKY', '百世快递', null, null),
('3', 'ZTO', '中通', null, null),
('4', 'STO', '申通', null, null),
('5', 'YTO', '圆通', null, null),
('6', 'YD', '韵达', null, null),
('7', 'YZPY', '邮政平邮', null, null),
('8', 'EMS', 'EMS', null, null),
('9', 'HHTT', '天天', null, null),
('10', 'JD', 'JD', null, null),
('11', 'QFKD', '全峰', null, null),
('12', 'GTO', '国通', null, null),
('13', 'UC', '优速', null, null),
('14', 'DBL', '德邦', null, null),
('15', 'FAST', '快捷', null, null),
('16', 'AMAZON', '亚马逊', null, null),
('17', 'ZJS', '宅急送', null, null),
('18', 'AJ', '安捷快递', null, null),
('19', 'AMAZON', '亚马逊物流', null, null),
('20', 'AOMENYZ', '澳门邮政', null, null),
('21', 'ANE', '安能物流', null, null),
('22', 'YIMIDIDA', '壹米滴答', null, null),
('23', 'AXD', '安信达快递', null, null),
('24', 'AYCA', '澳邮专线', null, null),
('25', 'BDT', '八达通', null, null),
('26', 'BFDF', '百福东方', null, null),
('27', 'BHGJ', '贝海国际', null, null),
('28', 'BQXHM', '北青小红帽', null, null),
('29', 'BTWL', '百世快运', null, null),
('30', 'CCES', 'CCES快递', null, null),
('31', 'CG', '程光', null, null),
('32', 'CITY100', '城市100', null, null),
('33', 'CJKD', '城际快递', null, null),
('34', 'CNPEX', 'CNPEX中邮快递', null, null),
('35', 'COE', 'COE东方快递', null, null),
('36', 'CSCY', '长沙创一', null, null),
('37', 'CDSTKY', '成都善途速运', null, null),
('38', 'CTG', '联合运通', null, null),
('39', 'DBL', '德邦', null, null),
('40', 'DSWL', 'D速物流', null, null),
('41', 'D4PX', '递四方速递', null, null),
('42', 'DTWL', '大田物流', null, null),
('43', 'EWE', 'EWE', null, null),
('44', 'EMS', 'EMS', null, null),
('45', 'FAST', '快捷速递', null, null),
('46', 'FEDEX', 'FEDEX联邦(国内件）', null, null),
('47', 'FEDEX_GJ', 'FEDEX联邦(国际件）', null, null),
('48', 'FKD', '飞康达', null, null),
('49', 'FTD', '富腾达', null, null),
('50', 'GD', '冠达', null, null),
('51', 'GDEMS', '广东邮政', null, null),
('52', 'GSD', '共速达', null, null),
('53', 'GTO', '国通快递', null, null),
('54', 'GTONG', '广通', null, null),
('55', 'GTSD', '高铁速递', null, null),
('56', 'HFWL', '汇丰物流', null, null),
('57', 'HGLL', '黑狗冷链', null, null),
('58', 'HHTT', '天天快递', null, null),
('59', 'HLWL', '恒路物流', null, null),
('60', 'HOAU', '天地华宇', null, null),
('61', 'HOTSCM', '鸿桥供应链', null, null),
('62', 'HPTEX', '海派通物流公司', null, null),
('63', 'hq568', '华强物流', null, null),
('64', 'HQSY', '环球速运', null, null),
('65', 'HTKY', '百世快递', null, null),
('66', 'HXLWL', '华夏龙物流', null, null),
('67', 'HXWL', '豪翔物流', null, null),
('68', 'HYLSD', '好来运快递', null, null),
('69', 'JAD', '捷安达', null, null),
('70', 'JD', '京东', null, null),
('71', 'JGSD', '京广速递', null, null),
('72', 'JIUYE', '九曳供应链', null, null),
('73', 'JJKY', '佳吉快运', null, null),
('74', 'JLDT', '嘉里物流', null, null),
('75', 'JTKD', '捷特快递', null, null),
('76', 'JXD', '急先达', null, null),
('77', 'JYKD', '晋越快递', null, null),
('78', 'JYM', '加运美', null, null),
('79', 'JGWL', '景光物流', null, null),
('80', 'JYWL', '佳怡物流', null, null),
('81', 'KYSY', '跨越速运', null, null),
('82', 'LB', '龙邦快递', null, null),
('83', 'LHT', '联昊通速递', null, null),
('84', 'MB', '民邦快递', null, null),
('85', 'MHKD', '民航快递', null, null),
('86', 'MK', '美快', null, null),
('87', 'MLWL', '明亮物流', null, null),
('88', 'NF', '南方', null, null),
('89', 'NEDA', '能达速递', null, null),
('90', 'PADTF', '平安达腾飞快递', null, null),
('91', 'PANEX', '泛捷快递', null, null),
('92', 'PJ', '品骏', null, null),
('93', 'PCA', 'PCA Express', null, null),
('94', 'QCKD', '全晨快递', null, null),
('95', 'QFKD', '全峰快递', null, null),
('96', 'QRT', '全日通快递', null, null),
('97', 'QXT', '全信通', null, null),
('98', 'RFEX', '瑞丰速递', null, null),
('99', 'RFD', '如风达', null, null),
('100', 'RFEX', '瑞丰速递', null, null),
('101', 'SAD', '赛澳递', null, null),
('102', 'SAWL', '圣安物流', null, null),
('103', 'SBWL', '盛邦物流', null, null),
('104', 'SDWL', '上大物流', null, null),
('105', 'SF', '顺丰快递', null, null),
('106', 'SFWL', '盛丰物流', null, null),
('107', 'SHWL', '盛辉物流', null, null),
('108', 'ST', '速通物流', null, null),
('109', 'STWL', '速腾快递', null, null),
('110', 'SUBIDA', '速必达物流', null, null),
('111', 'SDEZ', '速递e站', null, null),
('112', 'SURE', '速尔快递', null, null),
('113', 'HHTT', '天天', null, null),
('114', 'TAIWANYZ', '台湾邮政', null, null),
('115', 'UAPEX', '全一快递', null, null),
('116', 'UEQ', 'UEQ Express', null, null),
('117', 'UC', '优速快递', null, null),
('118', 'WJK', '万家康', null, null),
('119', 'WJWL', '万家物流', null, null),
('120', 'WXWL', '万象物流', null, null),
('121', 'XBWL', '新邦物流', null, null),
('122', 'XCWL', '迅驰物流', null, null),
('123', 'XFEX', '信丰快递', null, null),
('124', 'XYT', '希优特', null, null),
('125', 'XJ', '新杰物流', null, null),
('126', 'YADEX', '源安达快递', null, null),
('127', 'YCWL', '远成物流', null, null),
('128', 'YD', '韵达快递', null, null),
('129', 'YDH', '义达国际物流', null, null),
('130', 'YDT', '易达通', null, null),
('131', 'YFEX', '越丰物流', null, null),
('132', 'YFHEX', '原飞航物流', null, null),
('133', 'YFSD', '亚风快递', null, null),
('134', 'YTKD', '运通快递', null, null),
('135', 'YTO', '圆通速递', null, null),
('136', 'YXKD', '亿翔快递', null, null),
('137', 'YUNDX', '运东西', null, null),
('138', 'YZPY', '邮政平邮/小包', null, null),
('139', 'ZENY', '增益快递', null, null),
('140', 'ZHQKD', '汇强快递', null, null),
('141', 'ZJS', '宅急送', null, null),
('142', 'ZTE', '众通快递', null, null),
('143', 'ZTKY', '中铁快运', null, null),
('144', 'ZTO', '中通速递', null, null),
('145', 'ZTWL', '中铁物流', null, null),
('146', 'ZYWL', '中邮物流', null, null),
('147', 'ZY_YTUSA', '运淘美国', null, null),
('148', 'AAE', 'AAE全球专递', null, null),
('149', 'ACS', 'ACS雅仕快递', null, null),
('150', 'ADP', 'ADP Express Tracking', null, null),
('151', 'ANGUILAYOU', '安圭拉邮政', null, null),
('152', 'APAC', 'APAC', null, null),
('153', 'ARAMEX', 'Aramex', null, null),
('154', 'AT', '奥地利邮政', null, null),
('155', 'AUSTRALIA', 'Australia Post Tracking', null, null),
('156', 'BEL', '比利时邮政', null, null),
('157', 'BHT', 'BHT快递', null, null),
('158', 'BILUYOUZHE', '秘鲁邮政', null, null),
('159', 'BR', '巴西邮政', null, null),
('160', 'BUDANYOUZH', '不丹邮政', null, null),
('161', 'CA', '加拿大邮政', null, null),
('162', 'DHL', 'DHL', null, null),
('163', 'DHL_EN', 'DHL(英文版)', null, null),
('164', 'DHL_GLB', 'DHL全球', null, null),
('165', 'DHLGM', 'DHL Global Mail', null, null),
('166', 'DK', '丹麦邮政', null, null),
('167', 'DPD', 'DPD', null, null),
('168', 'DPEX', 'DPEX', null, null),
('169', 'EMSGJ', 'EMS国际', null, null),
('170', 'ESHIPPER', 'EShipper', null, null),
('171', 'GJEYB', '国际e邮宝', null, null),
('172', 'GJYZ', '国际邮政包裹', null, null),
('173', 'GLS', 'GLS', null, null),
('174', 'IADLSQDYZ', '安的列斯群岛邮政', null, null),
('175', 'IADLYYZ', '澳大利亚邮政', null, null),
('176', 'IAEBNYYZ', '阿尔巴尼亚邮政', null, null),
('177', 'IAEJLYYZ', '阿尔及利亚邮政', null, null),
('178', 'IAFHYZ', '阿富汗邮政', null, null),
('179', 'IAGLYZ', '安哥拉邮政', null, null),
('180', 'IAGTYZ', '阿根廷邮政', null, null),
('181', 'IAJYZ', '埃及邮政', null, null),
('182', 'IALBYZ', '阿鲁巴邮政', null, null),
('183', 'IALQDYZ', '奥兰群岛邮政', null, null),
('184', 'IALYYZ', '阿联酋邮政', null, null),
('185', 'IAMYZ', '阿曼邮政', null, null),
('186', 'IASBJYZ', '阿塞拜疆邮政', null, null),
('187', 'IASEBYYZ', '埃塞俄比亚邮政', null, null),
('188', 'IASNYYZ', '爱沙尼亚邮政', null, null),
('189', 'IASSDYZ', '阿森松岛邮政', null, null),
('190', 'IBCWNYZ', '博茨瓦纳邮政', null, null),
('191', 'IBDLGYZ', '波多黎各邮政', null, null),
('192', 'IBDYZ', '冰岛邮政', null, null),
('193', 'IBELSYZ', '白俄罗斯邮政', null, null),
('194', 'IBHYZ', '波黑邮政', null, null),
('195', 'IBJLYYZ', '保加利亚邮政', null, null),
('196', 'IBJSTYZ', '巴基斯坦邮政', null, null),
('197', 'IBLNYZ', '黎巴嫩邮政', null, null),
('198', 'IBLSD', '便利速递', null, null),
('199', 'IBLWYYZ', '玻利维亚邮政', null, null),
('200', 'IBLYZ', '巴林邮政', null, null),
('201', 'IBMDYZ', '百慕达邮政', null, null),
('202', 'IBOLYZ', '波兰邮政', null, null),
('203', 'IBTD', '宝通达', null, null),
('204', 'IBYB', '贝邮宝', null, null),
('205', 'ICKY', '出口易', null, null),
('206', 'IDFWL', '达方物流', null, null),
('207', 'IDGYZ', '德国邮政', null, null),
('208', 'IE', '爱尔兰邮政', null, null),
('209', 'IEGDEYZ', '厄瓜多尔邮政', null, null),
('210', 'IELSYZ', '俄罗斯邮政', null, null),
('211', 'IELTLYYZ', '厄立特里亚邮政', null, null),
('212', 'IFTWL', '飞特物流', null, null),
('213', 'IGDLPDEMS', '瓜德罗普岛EMS', null, null),
('214', 'IGDLPDYZ', '瓜德罗普岛邮政', null, null),
('215', 'IGJESD', '俄速递', null, null),
('216', 'IGLBYYZ', '哥伦比亚邮政', null, null),
('217', 'IGLLYZ', '格陵兰邮政', null, null),
('218', 'IGSDLJYZ', '哥斯达黎加邮政', null, null),
('219', 'IHGYZ', '韩国邮政', null, null),
('220', 'IHHWL', '华翰物流', null, null),
('221', 'IHLY', '互联易', null, null),
('222', 'IHSKSTYZ', '哈萨克斯坦邮政', null, null),
('223', 'IHSYZ', '黑山邮政', null, null),
('224', 'IJBBWYZ', '津巴布韦邮政', null, null),
('225', 'IJEJSSTYZ', '吉尔吉斯斯坦邮政', null, null),
('226', 'IJKYZ', '捷克邮政', null, null),
('227', 'IJNYZ', '加纳邮政', null, null),
('228', 'IJPZYZ', '柬埔寨邮政', null, null),
('229', 'IKNDYYZ', '克罗地亚邮政', null, null),
('230', 'IKNYYZ', '肯尼亚邮政', null, null),
('231', 'IKTDWEMS', '科特迪瓦EMS', null, null),
('232', 'IKTDWYZ', '科特迪瓦邮政', null, null),
('233', 'IKTEYZ', '卡塔尔邮政', null, null),
('234', 'ILBYYZ', '利比亚邮政', null, null),
('235', 'ILKKD', '林克快递', null, null),
('236', 'ILMNYYZ', '罗马尼亚邮政', null, null),
('237', 'ILSBYZ', '卢森堡邮政', null, null),
('238', 'ILTWYYZ', '拉脱维亚邮政', null, null),
('239', 'ILTWYZ', '立陶宛邮政', null, null),
('240', 'ILZDSDYZ', '列支敦士登邮政', null, null),
('241', 'IMEDFYZ', '马尔代夫邮政', null, null),
('242', 'IMEDWYZ', '摩尔多瓦邮政', null, null),
('243', 'IMETYZ', '马耳他邮政', null, null),
('244', 'IMJLGEMS', '孟加拉国EMS', null, null),
('245', 'IMLGYZ', '摩洛哥邮政', null, null),
('246', 'IMLQSYZ', '毛里求斯邮政', null, null),
('247', 'IMLXYEMS', '马来西亚EMS', null, null),
('248', 'IMLXYYZ', '马来西亚邮政', null, null),
('249', 'IMQDYZ', '马其顿邮政', null, null),
('250', 'IMTNKEMS', '马提尼克EMS', null, null),
('251', 'IMTNKYZ', '马提尼克邮政', null, null),
('252', 'IMXGYZ', '墨西哥邮政', null, null),
('253', 'INFYZ', '南非邮政', null, null),
('254', 'INRLYYZ', '尼日利亚邮政', null, null),
('255', 'INWYZ', '挪威邮政', null, null),
('256', 'IPTYYZ', '葡萄牙邮政', null, null),
('257', 'IQQKD', '全球快递', null, null),
('258', 'IQTWL', '全通物流', null, null),
('259', 'ISDYZ', '苏丹邮政', null, null),
('260', 'ISEWDYZ', '萨尔瓦多邮政', null, null),
('261', 'ISEWYYZ', '塞尔维亚邮政', null, null),
('262', 'ISLFKYZ', '斯洛伐克邮政', null, null),
('263', 'ISLWNYYZ', '斯洛文尼亚邮政', null, null),
('264', 'ISNJEYZ', '塞内加尔邮政', null, null),
('265', 'ISPLSYZ', '塞浦路斯邮政', null, null),
('266', 'ISTALBYZ', '沙特阿拉伯邮政', null, null),
('267', 'ITEQYZ', '土耳其邮政', null, null),
('268', 'ITGYZ', '泰国邮政', null, null),
('269', 'ITLNDHDBGE', '特立尼达和多巴哥EMS', null, null),
('270', 'ITNSYZ', '突尼斯邮政', null, null),
('271', 'ITSNYYZ', '坦桑尼亚邮政', null, null),
('272', 'IWDMLYZ', '危地马拉邮政', null, null),
('273', 'IWGDYZ', '乌干达邮政', null, null),
('274', 'IWKLEMS', '乌克兰EMS', null, null),
('275', 'IWKLYZ', '乌克兰邮政', null, null),
('276', 'IWLGYZ', '乌拉圭邮政', null, null),
('277', 'IWLYZ', '文莱邮政', null, null),
('278', 'IWZBKSTEMS', '乌兹别克斯坦EMS', null, null),
('279', 'IWZBKSTYZ', '乌兹别克斯坦邮政', null, null),
('280', 'IXBYYZ', '西班牙邮政', null, null),
('281', 'IXFLWL', '小飞龙物流', null, null),
('282', 'IXGLDNYYZ', '新喀里多尼亚邮政', null, null),
('283', 'IXJPEMS', '新加坡EMS', null, null),
('284', 'IXJPYZ', '新加坡邮政', null, null),
('285', 'IXLYYZ', '叙利亚邮政', null, null),
('286', 'IXLYZ', '希腊邮政', null, null),
('287', 'IXPSJ', '夏浦世纪', null, null),
('288', 'IXPWL', '夏浦物流', null, null),
('289', 'IXXLYZ', '新西兰邮政', null, null),
('290', 'IXYLYZ', '匈牙利邮政', null, null),
('291', 'IYDLYZ', '意大利邮政', null, null),
('292', 'IYDNXYYZ', '印度尼西亚邮政', null, null),
('293', 'IYDYZ', '印度邮政', null, null),
('294', 'IYGYZ', '英国邮政', null, null),
('295', 'IYLYZ', '伊朗邮政', null, null),
('296', 'IYMNYYZ', '亚美尼亚邮政', null, null),
('297', 'IYMYZ', '也门邮政', null, null),
('298', 'IYNYZ', '越南邮政', null, null),
('299', 'IYSLYZ', '以色列邮政', null, null),
('300', 'IYTG', '易通关', null, null),
('301', 'IYWWL', '燕文物流', null, null),
('302', 'IZBLTYZ', '直布罗陀邮政', null, null),
('303', 'IZLYZ', '智利邮政', null, null),
('304', 'JP', '日本邮政', null, null),
('305', 'NL', '荷兰邮政', null, null),
('306', 'ONTRAC', 'ONTRAC', null, null),
('307', 'QQYZ', '全球邮政', null, null),
('308', 'RDSE', '瑞典邮政', null, null),
('309', 'SWCH', '瑞士邮政', null, null),
('310', 'TNT', 'TNT快递', null, null),
('311', 'UPS', 'UPS', null, null),
('312', 'USPS', 'USPS美国邮政', null, null),
('313', 'YAMA', '日本大和运输(Yamato)', null, null),
('314', 'YODEL', 'YODEL', null, null),
('315', 'YUEDANYOUZ', '约旦邮政', null, null),
('316', 'ZY_ZCSD', '至诚速递', null, null),
('317', 'AOL', 'AOL（澳通）', null, null),
('318', 'BCWELT', 'BCWELT', null, null),
('319', 'BN', '笨鸟国际', null, null),
('320', 'COE', 'COE快递', null, null),
('321', 'UEX', 'UEX', null, null),
('322', 'ZY_AG', '爱购转运', null, null),
('323', 'ZY_AOZ', '爱欧洲', null, null),
('324', 'ZY_AUSE', '澳世速递', null, null),
('325', 'ZY_AXO', 'AXO', null, null),
('326', 'ZY_AZY', '澳转运', null, null),
('327', 'ZY_BDA', '八达网', null, null),
('328', 'ZY_BEE', '蜜蜂速递', null, null),
('329', 'ZY_BH', '贝海速递', null, null),
('330', 'ZY_BL', '百利快递', null, null),
('331', 'ZY_BM', '斑马物流', null, null),
('332', 'ZY_BOZ', '败欧洲', null, null),
('333', 'ZY_BT', '百通物流', null, null),
('334', 'ZY_BYECO', '贝易购', null, null),
('335', 'ZY_CM', '策马转运', null, null),
('336', 'ZY_CTM', '赤兔马转运', null, null),
('337', 'ZY_CUL', 'CUL中美速递', null, null),
('338', 'ZY_DGHT', '德国海淘之家', null, null),
('339', 'ZY_DYW', '德运网', null, null),
('340', 'ZY_EFS', 'EFS POST', null, null),
('341', 'ZY_ESONG', '宜送转运', null, null),
('342', 'ZY_ETD', 'ETD', null, null),
('343', 'ZY_FD', '飞碟快递', null, null),
('344', 'ZY_FG', '飞鸽快递', null, null),
('345', 'ZY_FLSD', '风雷速递', null, null),
('346', 'ZY_FX', '风行快递', null, null),
('347', 'ZY_FXSD', '风行速递', null, null),
('348', 'ZY_FY', '飞洋快递', null, null),
('349', 'ZY_HC', '皓晨快递', null, null),
('350', 'ZY_HCYD', '皓晨优递', null, null),
('351', 'ZY_HDB', '海带宝', null, null),
('352', 'ZY_HFMZ', '汇丰美中速递', null, null),
('353', 'ZY_HJSD', '豪杰速递', null, null),
('354', 'ZY_HTAO', '360hitao转运', null, null),
('355', 'ZY_HTCUN', '海淘村', null, null),
('356', 'ZY_HTKE', '365海淘客', null, null),
('357', 'ZY_HTONG', '华通快运', null, null),
('358', 'ZY_HXKD', '海星桥快递', null, null),
('359', 'ZY_HXSY', '华兴速运', null, null),
('360', 'ZY_HYSD', '海悦速递', null, null),
('361', 'ZY_IHERB', 'LogisticsY', null, null),
('362', 'ZY_JA', '君安快递', null, null),
('363', 'ZY_JD', '时代转运', null, null),
('364', 'ZY_JDKD', '骏达快递', null, null),
('365', 'ZY_JDZY', '骏达转运', null, null),
('366', 'ZY_JH', '久禾快递', null, null),
('367', 'ZY_JHT', '金海淘', null, null),
('368', 'ZY_LBZY', '联邦转运FedRoad', null, null),
('369', 'ZY_LPZ', '领跑者快递', null, null),
('370', 'ZY_LX', '龙象快递', null, null),
('371', 'ZY_LZWL', '量子物流', null, null),
('372', 'ZY_MBZY', '明邦转运', null, null),
('373', 'ZY_MGZY', '美国转运', null, null),
('374', 'ZY_MJ', '美嘉快递', null, null),
('375', 'ZY_MST', '美速通', null, null),
('376', 'ZY_MXZY', '美西转运', null, null),
('377', 'ZY_MZ', '168?美中快递', null, null),
('378', 'ZY_OEJ', '欧e捷', null, null),
('379', 'ZY_OZF', '欧洲疯', null, null),
('380', 'ZY_OZGO', '欧洲GO', null, null),
('381', 'ZY_QMT', '全美通', null, null),
('382', 'ZY_QQEX', 'QQ-EX', null, null),
('383', 'ZY_RDGJ', '润东国际快线', null, null),
('384', 'ZY_RT', '瑞天快递', null, null),
('385', 'ZY_RTSD', '瑞天速递', null, null),
('386', 'ZY_SCS', 'SCS国际物流', null, null),
('387', 'ZY_SDKD', '速达快递', null, null),
('388', 'ZY_SFZY', '四方转运', null, null),
('389', 'ZY_SOHO', 'SOHO苏豪国际', null, null),
('390', 'ZY_SONIC', 'Sonic-Ex速递', null, null),
('391', 'ZY_ST', '上腾快递', null, null),
('392', 'ZY_TCM', '通诚美中快递', null, null),
('393', 'ZY_TJ', '天际快递', null, null),
('394', 'ZY_TM', '天马转运', null, null),
('395', 'ZY_TN', '滕牛快递', null, null),
('396', 'ZY_TPAK', 'TrakPak', null, null),
('397', 'ZY_TPY', '太平洋快递', null, null),
('398', 'ZY_TSZ', '唐三藏转运', null, null),
('399', 'ZY_TTHT', '天天海淘', null, null),
('400', 'ZY_TWC', 'TWC转运世界', null, null),
('401', 'ZY_TX', '同心快递', null, null),
('402', 'ZY_TY', '天翼快递', null, null),
('403', 'ZY_TZH', '同舟快递', null, null),
('404', 'ZY_UCS', 'UCS合众快递', null, null),
('405', 'ZY_WDCS', '文达国际DCS', null, null),
('406', 'ZY_XC', '星辰快递', null, null),
('407', 'ZY_XDKD', '迅达快递', null, null),
('408', 'ZY_XDSY', '信达速运', null, null),
('409', 'ZY_XF', '先锋快递', null, null),
('410', 'ZY_XGX', '新干线快递', null, null),
('411', 'ZY_XIYJ', '西邮寄', null, null),
('412', 'ZY_XJ', '信捷转运', null, null),
('413', 'ZY_YGKD', '优购快递', null, null),
('414', 'ZY_YJSD', '友家速递(UCS)', null, null),
('415', 'ZY_YPW', '云畔网', null, null),
('416', 'ZY_YQ', '云骑快递', null, null),
('417', 'ZY_YQWL', '一柒物流', null, null),
('418', 'ZY_YSSD', '优晟速递', null, null),
('419', 'ZY_YSW', '易送网', null, null)
EOF;

        DB::statement($query);
    }
}
