import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore ({
    state() {
        return {
            boardData: [], // 게시글 데이터 저장할 변수
            lastId: '', // 가장 마지막에 로드된 게시물의 ID
            addBtnFlg: true, // 더보기 버튼 표시용 flg
            tabFlg: 0, // 탭UI flg (0:메인, 1:필터, 2:작성)
            imgUrl: '', // 이미지 url
            imgClass: '',
        }
    },
    mutations: { // 일반적인 Js 함수 정의
        // 초기데이터 세팅
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length - 1].id);
        },
        // 더보기 데이터 세팅
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // lastId 변경
        changeLastId(state, id) {
            state.lastId = id;
        },
        // 탭UI flg 변경
        changeTabFlg(state, num) {
            state.tabFlg = num;
        },
        // 이미지 URL 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },
        // 이미지 filter 변경
        changeImgClass(state, imgClass) {
            state.imgClass = imgClass;
            // document.querySelector('.upload-img').className = 'upload-img '+ imgClass;
        },
        resetImg(state) {
            state.imgClass = '';
            state.imgUrl = '';
        }
    },
    actions: { // ajax나 비동기처리 함수들 정의
        getMainList(context) {
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                // commit 안에 첫번째는 mutation에서 사용할 함수, 두번째는 그 함수에 넣을 데이터
                context.commit('createBoardData', res.data); 
            })
            .catch( err => {
                console.log( err )
            })
        },
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data) {
                    context.commit('addBoardData', res.data);
                } else {
                    context.state.addBtnFlg = false;
                    alert('마지막 글입니다.');
                }
            })
            .catch( err => {
                console.log( err )
            })
        },
    }
})

export default store