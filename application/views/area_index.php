 <!-- 省份下拉框开始 -->
                    <select name="pid">
                        <?php
                            foreach ($province->result() as $item):
                        ?>
                            <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                    <!-- 省份下拉框结束 -->
                     
                    <!-- 城市/地区下拉框开始 -->
                    <select name="cid">
                        <option value=''>请选择</option>
                        <?php
                            foreach ($beijing->result() as $item):
                        ?>
                            <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                    <!-- 城市/地区下拉框结束 -->
                     
                    <!-- 县市下拉框开始 -->
                    <select name="xid">
                        <option value=''>请选择</option>
				
                    </select>        
                    <!-- 县市下拉框结束 -->
                     
                    <!-- 乡镇下拉框开始 -->
                    <select name="tid">
                     
                        <option value=''>请选择</option>
                       
                        
                    </select>
                    <!-- 乡镇下拉框结束 -->      
                    