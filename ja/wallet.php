<!-- Wallet Section -->
<div id="wallet">
  <div class="container">
    <div class="section-title text-center center">
      <h2>WALLET</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="wallet-button">
          <a href="<?php echo URL; ?>/download/vipstar_for_mac.zip">
            <img src="<?php echo URL; ?>/img/wallet-mac.png" alt="" width="161" height="51">
          </a>
        </div>
        <div class="wallet-swap">
          <p class="wallet-swap-title-b">旧VIPS(イーサリアムトークン)を独自通貨にスワップします。ご期待ください。</p>
          <button type="button" class="button button-bw" data-toggle="modal" data-target="#walletModal">
            スワップの約束&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="walletModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="walletModalLabel">スワップの約束</h4>
                </div>
                <div class="modal-body">
                  <p class="modal-text">
                    <span>1. 500億枚から600億枚に発行数が増えていますが？</span><br>
                    <span><b>1.2倍に増量してスワップを行います。</b></span>
                  </p>
                  <p class="modal-text">
                    <span>2. 端数はどうなりますか？</span><br>
                    <span><b>端数は繰り上げます。</b></span>
                  </p>
                  <p class="modal-text">
                    <span>3. スワップされた分はPoSを貰えないなど制限はありますか？</span><br>
                    <span><b>いいえ。PoSも貰うことができます。</b></span>
                  </p>
                  <p class="modal-text">
                    <span>4. スマートフォンしか持っていませんが、スワップを受け取ることはできますか？</span><br>
                    <span><b>CoinExchange上場後に送金する特別措置を用意します。ただし、行うのは上場後しばらく経ってからになり、1.2倍の増量も行わないため、パソコンを用意することをおすすめします。</b></span>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>