<?php 
    class  Componentes{
        
        public static function progressBar($percentage, $color){
            return
            '<div class="progress" id="progressBar">
                <div class="bg-'.$color.' progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="'.$percentage.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$percentage.'%"></div>
            </div>';
        }
        
        public static function myModal(
            $btn_text, 
            $header_modal, 
            $body_modal, 
            $btn_text_close, 
            $btn_text_ir, 
            $vinculo_btn_ir,
            $btn_color = "success")
            {
            return
            
                // Button trigger moda
                '<button type="button" class="btn btn-'.$btn_color.'" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    '.$btn_text.'
                </button>
            
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog        ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">'.$header_modal.'</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">'.
                                $body_modal.
                            '</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">'.$btn_text_close.'</button>
                                <a type="button" class="btn btn-primary" href="'.$vinculo_btn_ir.'">'.$btn_text_ir.'</a>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }
?>