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
            imgClass: '', // 이미지 filter
            imgFile: null, // 이미지 파일
            content: '',  // 글 작성 내용
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
        // 작성글 데이터 셋팅용
		addWriteData(state, data) {
			state.boardData.unshift(data);
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
        },
        // 이미지 file 변경
        changeImgFile(state, imgFile) {
            state.imgFile = imgFile;
        },
        // 글 내용 변경
        changeContent(state, content) {
            state.content = content;
        },
        // 작성 취소시 초가화
        resetImg(state) {
            state.imgClass = '';
            state.imgUrl = '';
        },
        // 업로드 이미지 변경
		changePostImg(state, postImg){
			state.postImg = postImg;
		},
        // 초기화
        claerState(state) {
			state.imgClass = '';
			state.imgUrl = '';
			state.imgFile = null;
		},
    },
    actions: { // ajax나 비동기처리 함수들 정의
        // 메인 게시글 습득
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
        getMoreList(context) { // 게시글 추가 습득
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
        // 게시글 작성
        writeContent(context) {
            const data = {
                name: '김민규',
                filter: context.state.imgClass,
                img: context.state.imgFile,
                content: context.state.content,
            };
            console.log(context);
            console.log(data);
            const header = {
                headers: {
                    'Content-Type' : 'multipart/form-data'
                }
            };

            axios.post('http://192.168.0.66/api/boards', data, header)
            .then(res => {
                context.commit('addWriteData', res.data);
                context.commit('changeTabFlg', 0);
                context.commit('clearState');
            })
            .catch( err => {
                console.log( err )
            })
        },
    }
})

export default store